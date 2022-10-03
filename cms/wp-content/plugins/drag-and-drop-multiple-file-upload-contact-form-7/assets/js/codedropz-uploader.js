/**
 * CodeDropz Uploader v1.3.6.4
 * Copyright 2018 Glen Mongaya
 * CodeDrop Drag&Drop Uploader
 * @version 1.3.6.4
 * @author CodeDropz, Glen Don L. Mongaya
 * @license The MIT License (MIT)
 */

// CodeDropz Drag and Drop Plugin
(function($){
	$.fn.CodeDropz_Uploader = function( settings ){

		// Support multiple elements
		this.each( function() {

			// Parent input file type
			var input = $(this);

			// Extends options
			var options = $.extend({
				handler 			: input,
				color 				: "#000",
				background 			: '',
				server_max_error 	: 'Uploaded file exceeds the maximum upload size of your server.',
				max_file 			: input.data('max') ? input.data('max') : 10, // default 10
				max_upload_size 	: input.data('limit') ? input.data('limit') : '10485760', // should be a bytes it's (5MB)
				supported_type 		: input.data('type') ? input.data('type') : 'jpg|jpeg|JPG|png|gif|pdf|doc|docx|ppt|pptx|odt|avi|ogg|m4a|mov|mp3|mp4|mpg|wav|wmv|xls',
				text 				: 'Drag & Drop Files Here',
				separator			: 'or',
				button_text 		: 'Browse Files',
				on_success			: ''
			}, settings);

			// Get storage name
			var dataStorageName = input.data('name') + '_count_files';

			// File Counter
			localStorage.setItem( dataStorageName, 1);

			// Template Container
			var cdropz_template = '<div class="codedropz-upload-handler">'
				+ '<div class="codedropz-upload-container">'
					+ '<div class="codedropz-upload-inner">'
						+ '<'+ dnd_cf7_uploader.drag_n_drop_upload.tag +'>'+ options.text +'</'+ dnd_cf7_uploader.drag_n_drop_upload.tag +'>'
						+ '<span>'+ options.separator +'</span>'
						+'<div class="codedropz-btn-wrap"><a class="cd-upload-btn" href="javascript:void(0)">'+ options.button_text +'</a></div>'
						+'</div>'
					+ '</div>'
					+ '<span class="dnd-upload-counter"><span>0</span> '+ dnd_cf7_uploader.dnd_text_counter +' '+ parseInt(options.max_file) +'</span>'
				+ '</div>';


			// Wrap input fields
			options.handler.wrapAll('<div class="codedropz-upload-wrapper"></div>');

			// Remove special character
			options.supported_type = options.supported_type.replace(/[^a-zA-Z0-9| ]/g, "");

			// Element Handler
			var form_handler = options.handler.parents('form'),
				options_handler = options.handler.parents('.codedropz-upload-wrapper'),
				btnOBJ =  $('input[type="submit"]', form_handler );

			// Append Format
			options.handler.after( cdropz_template);

			// preventing the unwanted behaviours
			$('.codedropz-upload-handler', options_handler ).on( 'drag dragstart dragend dragover dragenter dragleave drop',  function( e ){
				e.preventDefault();
				e.stopPropagation();
			})

			// dragover and dragenter - add class
			$('.codedropz-upload-handler', options_handler ).on( 'dragover dragenter',  function( e ){
				$(this).addClass('codedropz-dragover');
			});

			// dragleave dragend drop - remove class
			$('.codedropz-upload-handler', options_handler ).on( 'dragleave dragend drop',  function( e ){
				$(this).removeClass('codedropz-dragover');
			});

			// Browse button clicked
			$( 'a.cd-upload-btn', options_handler ).on("click", function(e){
				// stops the default action of an element from happening
				e.preventDefault();

				// Reset value
				options.handler.val(null);

				// Click input type[file] element
				options.handler.click();
			});

			// when dropping files
			$('.codedropz-upload-handler', options_handler ).on('drop', function(event){
				// Run the uploader
				DND_Setup_Uploader( event.originalEvent.dataTransfer.files, 'drop' );
			});

			// Trigger when input type[file] is click/changed
			options.handler.on("change", function(e){
				// Run the uploader
				DND_Setup_Uploader( this.files, 'click' );
			});
           
            // Remove accept attribute on mobile devices
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                input.removeAttr('accept');
            }

			// Setup Uploader
			var DND_Setup_Uploader = function( files, action ) {

				// make sure we have files
				if( ! files.length > 1 ) {
					return;
				}

				// gathering the form data
				var formData = new FormData();

				// Append file
				//formData.append('supported_type', options.supported_type ); @note : removed due Vulnerability
				formData.append('size_limit', options.max_upload_size );
				formData.append('action', 'dnd_codedropz_upload' );
				formData.append('type', action );
				formData.append('security', dnd_cf7_uploader.ajax_nonce );

				// CF7 - upload field name & cf7 id
				formData.append('form_id', input.data('id'));
				formData.append('upload_name', input.data('name'));

				// remove has error
				$('span.has-error', options.handler ).remove();

				// Loop files
				$.each( files,function( i, file ) {

					// Reset upload file type
					if( typeof formData.delete !== 'undefined' ) {
						formData.delete('upload-file');
					}

					// Limit file upload
					if( localStorage.getItem( dataStorageName ) > options.max_file ) {
						if( ! $('span.has-error-msg', options_handler ).length > 0 ) {
							err_msg = dnd_cf7_uploader.drag_n_drop_upload.max_file_limit;
							options_handler.append('<span class="has-error-msg">'+ err_msg.replace('%count%', options.max_file ) +'</span>');
						}
						return false;
					}

					// Create progress bar
					var progressBarID = CodeDropz_Object.createProgressBar( file ),
						has_error = false;

					// File size limit - validation
					if( file.size > options.max_upload_size ) {
						$('.dnd-upload-details', $('#' + progressBarID)).append('<span class="has-error">'+ dnd_cf7_uploader.drag_n_drop_upload.large_file +'</span>');
						has_error = true;
					}

					// Validate file type
					regex_type = new RegExp("(.*?)\.("+ options.supported_type +")$");
					if ( has_error === false && !( regex_type.test( file.name.toLowerCase() ) ) ) {
						$('.dnd-upload-details', $('#' + progressBarID)).append('<span class="has-error">'+ dnd_cf7_uploader.drag_n_drop_upload.inavalid_type +'</span>');
						has_error = true;
					}

					// Increment count
					localStorage.setItem( dataStorageName, ( Number( localStorage.getItem( dataStorageName ) ) + 1 ) );

					// Make sure there's no error
					if( has_error === false ) {

						// Append file
						formData.append('upload-file', file );

						// Process ajax upload
						var dnd_ajax_upload =  $.ajax({
							url			: options.ajax_url,
							type		: form_handler.attr('method'),
							data		: formData,
							dataType	: 'json',
							cache		: false,
							contentType	: false,
							processData	: false,
							xhr			: function(){
								//objects to interact with servers.
								var _xhr = new window.XMLHttpRequest();

								// reference : https://stackoverflow.com/questions/15410265/file-upload-progress-bar-with-jquery
								_xhr.upload.addEventListener("progress", function(event){
									if ( event.lengthComputable ) {
										var percentComplete = ( event.loaded / event.total );
										var	percentage = parseInt( percentComplete * 100 );

										// Progress Loading
										CodeDropz_Object.setProgressBar( progressBarID, percentage - 1 );

									}
								}, false);

								return _xhr;
							},
							complete	: function() {
								// Set progress bar to 100%
								CodeDropz_Object.setProgressBar( progressBarID, 100 );
							},
							success: function(response) {
								if( response.success ) {

                                    CodeDropz_Object.setProgressBar( progressBarID, 100 );

									// Callback on success
									if ( $.isFunction( options.on_success ) ) {
										options.on_success.call( this, input, progressBarID, response );
									}

								}else {
									$('.dnd-progress-bar', $('#' + progressBarID)).remove();
									$('.dnd-upload-details', $('#' + progressBarID)).append('<span class="has-error">'+ response.data +'</span>');
									$('input[type="submit"]', form_handler ).removeClass('disabled').prop( "disabled", false );
                                    $('#' + progressBarID ).removeClass('in-progress');
								}
							},
							error: function(xhr,ajax,thrownError ) {
								$('.dnd-progress-bar', $('#' + progressBarID)).remove();
								$('.dnd-upload-details', $('#' + progressBarID)).append('<span class="has-error">'+ options.server_max_error +'</span>');
								$('input[type="submit"]', form_handler ).removeClass('disabled').prop( "disabled", false );
                                $('#' + progressBarID ).removeClass('in-progress');
							}
						});
					}
				});

			}

			// CodeDropz object and functions
			var CodeDropz_Object = {

				// Create progress bar
				createProgressBar : function( file ) {

					// Setup progress bar variable
					var upload_handler = $('.codedropz-upload-handler', options_handler ),
						generated_ID = 'dnd-file-' + Math.random().toString(36).substr(2, 9);

					// Setup progressbar elements
					var fileDetails = '<div class="dnd-upload-image"><span class="file"></span></div>'
					+ '<div class="dnd-upload-details">'
						+ '<span class="name"><span>'+ file.name +'</span><em>('+ CodeDropz_Object.bytesToSize( file.size ) +')</em></span>'
						+ '<a href="javascript:void(0)" title="'+ dnd_cf7_uploader.drag_n_drop_upload.delete.title +'" class="remove-file" data-storage="'+ dataStorageName +'"><span class="dnd-icon-remove"></span></a>'
						+ '<span class="dnd-progress-bar"><span></span></span>'
					+ '</div>';

					// Append Status Bar
					upload_handler.after('<div id="'+ generated_ID +'" class="dnd-upload-status">'+ fileDetails +'</div>');

					return generated_ID;
				},

				// Process progressbar ( Animate progress )
				setProgressBar : function( statusbar, percent ) {
					var statusBar = $( '.dnd-progress-bar', $('#' + statusbar) );
					if( statusBar.length > 0 ) {
						// Disable submit button
						CodeDropz_Object.disableBtn( btnOBJ );

						// Compute Progress bar
						progress_width = ( percent * statusBar.width() / 100);
                        
                        // Set status bar in-progress
                        $('#' + statusbar).addClass('in-progress');
                        
                        if( percent == 100 ) {
                            $('span', statusBar ).width('100%').text( percent + '% ' );
                        }else {
                            $('span', statusBar ).animate({ width: progress_width }, 10).text( percent + '% ');
                        }

						if( percent == 100 ) {
						    $('#' + statusbar).addClass('complete').removeClass('in-progress');
						}
					}
					return false;
				},

				// Size Conversion
				bytesToSize : function( bytes ) {

					if( bytes === 0 )
						return '0';

					kBytes = (bytes / 1024);
					fileSize = ( kBytes >= 1024 ? ( kBytes / 1024 ).toFixed(2) + 'MB' : kBytes.toFixed(2) + 'KB' );

					return fileSize;
				},

				// Disable button
				disableBtn : function( BtnOJB ) {
					if( BtnOJB.length > 0 ) {
						BtnOJB.addClass('disable').prop( "disabled", true );
					}
				}
			};
		});// end each

		// Remove File
		$(document).on("click",'.dnd-icon-remove',function(e){
			var _self = $(this),
				_dnd_status = _self.parents('.dnd-upload-status'),
				_parent_wrap = _self.parents('.codedropz-upload-wrapper'),
				removeStorageData = _self.parent('a').attr('data-storage'),
				storageCount = Number( localStorage.getItem( removeStorageData ) );

			// If file upload is in progress don't delete
			if( _dnd_status.hasClass('in-progress')) {
				return false;
			}

			// Direct remove the file if there's any error.
			if( $( '.has-error', _dnd_status ).length > 0 ) {
				_dnd_status.remove(); localStorage.setItem( removeStorageData, ( storageCount - 1 ) );
				return false;
			}

			// Change text Status
			_self.addClass('deleting').text( dnd_cf7_uploader.drag_n_drop_upload.delete.text + '...');

			// Request ajax image delete
			var delData = {
				path 		: _dnd_status.find('input[type="hidden"]').val(),
				action 		: 'dnd_codedropz_upload_delete',
				security 	: dnd_cf7_uploader.ajax_nonce
			};

			$.post( settings.ajax_url, delData, function(response) {
				if( response.success ) {

					// Reduce file count and status bar element.
					_dnd_status.remove(); localStorage.setItem( removeStorageData, ( storageCount - 1 ) );

					// Remove error msg
					if( $('.dnd-upload-status', _parent_wrap ).length <= 1 ) {
						$('span.has-error-msg', _parent_wrap ).remove();
					}

					// Update Counter
					$('.dnd-upload-counter span', _parent_wrap ).text( Number( localStorage.getItem( removeStorageData ) ) - 1 );
				}
			});

			// Clear message
			$('span.has-error-msg').remove();

		});

	}; // end fn.function

}( jQuery ));