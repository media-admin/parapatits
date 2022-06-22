<script>

  document.addEventListener("DOMContentLoaded", function() {

  dywc.init({

   cookie_version: 1, // Version der Cookiedefinition, damit bei Konfigurationsänderung erneutes Opt-In erforderlich wird
   cookie_name: 'dywc', // Name des Cookies, der zur Speicherung der Entscheidung verwendet wird
   cookie_expire: 31536e3, // Laufzeit des Cookies in Sekunden (31536e3 = 1Jahr)
   cookie_path: '/', // Pfad auf dem der Cookie gespeichert wird
   mode: 1, // 1 oder 2, bestimmt den Buttonstil 
   bglayer: true, // Verdunklung des Hintegrundes aktiv (true) oder inaktiv (false)
   position: 'mt', // mt, mm, mb, lt, lm, lb, rt, rm, rb

   id_bglayer: 'dywc_bglayer',
   id_cookielayer: 'dywc',
   id_cookieinfo: 'dywc_info',

   url_legalnotice: '/datenschutzerklaerung.html', // or null
   url_imprint: '/impressum.html', // or null

   text_title: 'Datenschutzeinstellungen',
   text_dialog: 'Wir nutzen Cookies auf unserer Website. Einige von ihnen sind essenziell, während andere uns helfen, diese Website und Ihre Erfahrung zu verbessern.',

   cookie_groups: [
	{
	 label: 'Notwendig',
	 fixed: true,
	 info: 'Zum Betrieb der Seite notwendige Cookies:',
	 cookies: [
	  {
	   label: 'PHP Session Cookie',
	   publisher: 'Eigentümer dieser Website',
	   aim: 'Absicherung Kontaktformular / SPAM Schutz',
	   name: 'PHPSESSID',
	   duraction: 'Session'
	  }, {
	   label: 'Cookiespeicherung Entscheidungscookie',
	   publisher: 'Eigentümer dieser Website',
	   aim: 'Speichert die Einstellungen der Besucher bezüglich der Speicherung von Cookies.',
	   name: 'dywc',
	   duration: '1 Jahr'
	  }
	 ]
	}, {
	 label: 'Statistiken',
	 fixed: false,
	 info: 'Cookies die zur Auswertung des Benutzerverhaltens notwendig sind:',
	 cookies: [
	  {
	   label: 'Google Analytics',
	   publisher: 'Google LLC',
	   aim: 'Cookie von Google für Website-Analysen. Erzeugt statistische Daten darüber, wie der Besucher die Website nutzt.',
	   name: '_ga,_gid',
	   duration: '2 Jahre'
	  }
	 ],
	 accept: function() {

	  // Hier kommt der Opt-In Code für die jeweilige Cookie Gruppe rein
	  // Folgendes Beispiel für Google Analytics

	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', '{TrackingID}', 'auto');
	  ga('send', 'pageview');

	 },
	 reject: function() {

	  // Hier kommt der Opt-Out Code rein
	  // Folgendes Beispiel für Google Analtics

	  var disableStr = 'ga-disable-{TrackingID}';

	  window[disableStr] = true; document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';

	  dywc.cookie.removeItem('_ga', '/', '.domain.de');
	  dywc.cookie.removeItem('_gid', '/', '.domain.de');
	  dywc.cookie.removeItem('_gat', '/', '.domain.de');
	  dywc.cookie.removeItem('_gat_gtag_{TrackingID}', '/', '.domain.de');

	 }
	}
   ]

  });

  });
  
</script>