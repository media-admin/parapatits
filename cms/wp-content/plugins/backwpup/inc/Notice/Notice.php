<?php

namespace Inpsyde\BackWPup\Notice;

/**
 * Class Notice
 *
 * @package Inpsyde\BackWPup\Notice
 */
abstract class Notice
{

    const CAPABILITY = 'backwpup';
    const MAIN_ADMIN_PAGE_ID = 'toplevel_page_backwpup';
    const NETWORK_ADMIN_PAGE_ID = 'toplevel_page_backwpup-network';
    const DEFAULT_LANGUAGE = 'en';

    // Notice typees
    const TYPE_ADMIN = 'admin';
    const TYPE_BACKWPUP = 'backwpup';

    /**
     * @var array
     */
    protected static $main_admin_page_ids = [
        self::MAIN_ADMIN_PAGE_ID,
        self::NETWORK_ADMIN_PAGE_ID,
    ];

    /**
     * @var \Inpsyde\BackWPup\Notice\NoticeView
     */
    protected $view;

    /**
     * Whether this notice should be dismissible
     *
     * @var bool
     */
    protected $dismissible;

    /**
     * Notice constructor
     *
     * @param \Inpsyde\BackWPup\Notice\NoticeView $view
     */
    public function __construct(NoticeView $view, $dismissible = true)
    {
        $this->view = $view;
        $this->dismissible = $dismissible;
    }

    /**
     * Initialize
     *
     * @param string $type The notice type, either Notice::TYPE_ADMIN or Notice::TYPE_BACKWPUP.
     *                     Notice::TYPE_BACKWPUP makes the notice only visible on BackWPup pages.
     *                     Notice::TYPE_ADMIN makes the notice available on all WP admin pages.
     */
    public function init($type = self::TYPE_BACKWPUP)
    {
        if (!is_admin() || !current_user_can(static::CAPABILITY)) {
            return;
        }

        if ($type === static::TYPE_BACKWPUP) {
            add_action('backwpup_admin_messages', [ $this, 'notice' ], 20);
        } elseif ($type === static::TYPE_ADMIN) {
            add_action('admin_notices', [ $this, 'notice' ], 20);
        } else {
            throw new \InvalidArgumentException(
                __('Invalid notice type specified', 'backwpup')
            );
        }

        if ($this->dismissible === true) {
            add_action('admin_enqueue_scripts', [ $this, 'enqueueScripts' ]);
            DismissibleNoticeOption::setup_actions(true, static::ID, static::CAPABILITY);
        }
    }

    /**
     * Enqueue Scripts
     */
    public function enqueueScripts()
    {
        $suffix = (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min';

        wp_enqueue_script(
            'backwpup-notice',
            untrailingslashit(\BackWPup::get_plugin_data('URL')) . "/assets/js/notice{$suffix}.js",
            ['underscore', 'jquery'],
            filemtime(untrailingslashit(\BackWPup::get_plugin_data('plugindir') . "/assets/js/notice{$suffix}.js")),
            true
        );
    }

    /**
     * Print Notice
     */
    public function notice()
    {
        if (!$this->isScreenAllowed() || !$this->shouldDisplay()) {
            return;
        }

        $message = $this->message();
        if ($message === null) {
            return;
        }

        $this->render($message);
    }

    /**
     * Render the notice with the appropriate view type
     *
     * This method can specify whether the notice should be a success, error,
     * warning, info, or generic notice.
     *
     * @param NoticeMessage $message The message to render
     */
    protected function render(NoticeMessage $message)
    {
        $this->view->notice($message, $this->getDismissActionUrl());
    }

    /**
     * Gets the dismissible action URL from DismissibleNoticeOption
     *
     * @return string The URL to dismiss the notice
     */
    protected function getDismissActionUrl()
    {
        if ($this->dismissible === true) {
            return DismissibleNoticeOption::dismiss_action_url(
                static::ID,
                DismissibleNoticeOption::FOR_USER_FOR_GOOD_ACTION
            );
        }
    }

    /**
     * Return the message to display in the notice
     *
     * @return \Inpsyde\BackWPup\Notice\NoticeMessage The message to display
     */
    abstract protected function message();

    /**
     * Returns whether the current screen should show the notice
     *
     * @return bool True if the notice should be displayed
     */
    protected function isScreenAllowed()
    {
        $screen_id = get_current_screen()->id;
        return in_array($screen_id, static::$main_admin_page_ids, true);
    }

    /**
     * Whether to display the notice
     *
     * @return bool True if the notice should be displayed, false otherwise
     */
    protected function shouldDisplay()
    {
        if ($this->dismissible === true) {
            $option = new DismissibleNoticeOption(true);
            return (bool)$option->is_dismissed(static::ID) === false;
        }

        return true;
    }
}
