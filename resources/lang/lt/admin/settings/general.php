<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => '"Active Directory" domenas',
    'ad_domain_help'			=> 'Tai kartais sutampa su jūsų el. Pašto domenu, bet ne visada.',
    'is_ad'				        => 'Tai yra "Active Directory" serveris',
	'alert_email'				=> 'Siūsti įspėjimus',
	'alerts_enabled'			=> 'Perspėjimai įjungti',
	'alert_interval'			=> 'Galiojanti įspėjimų slenkstis (dienomis)',
	'alert_inv_threshold'		=> 'Inventoriaus įspėjimo slenkstis',
	'asset_ids'					=> 'Įrangos ID',
	'audit_interval'            => 'Audito intervalas',
    'audit_interval_help'       => 'Jei turite reguliariai fiziškai tikrinti savo turtą, įveskite intervalą per mėnesius.',
	'audit_warning_days'        => 'Audito įspėjimo slenkstis',
    'audit_warning_days_help'   => 'Kiek dienų iš anksto turėtume įspėti, kada turėtume atlikti auditą?',
	'auto_increment_assets'		=> 'Sukurti automatiškai didėjantį įragos ID nr.',
	'auto_increment_prefix'		=> 'Papilomas priedėlis (pasirinktinai)',
	'auto_incrementing_help'    => 'Įjungti automatiškai didėjantį įrangos ID pirmajam suteikiant šį nr.',
	'backups'					=> 'Atsarginė kopija',
	'barcode_settings'			=> 'Prekės kodo nustatymai',
    'confirm_purge'			    => 'Patvirtinkite švarą',
    'confirm_purge_help'		=> 'Žemiau esančiame laukelyje įveskite tekstą "DELETE", kad išvalykite ištrintus įrašus. Šis veiksmas negali būti panaikintas.',
	'custom_css'				=> 'Užsakytas CSS',
	'custom_css_help'			=> 'Įveskite bet kokį užsakytą CSS peržiūrėjimo norėtumėte naudoti. Neįtraukite &lt;style>&lt;/Stilius&gt; žymės.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
	'default_currency'  		=> 'Numatytoji valiuta',
	'default_eula_text'			=> 'Numatytasis EULA',
  'default_language'			=> 'Numatyta kalba',
	'default_eula_help_text'	=> 'Jūs taip pat galite susieti pritaikytą EULĄ specifinėms įrangos grupėms.',
    'display_asset_name'        => 'Rodyti įrangos pavadinimą',
    'display_checkout_date'     => 'Rodyti išdavimo datą',
    'display_eol'               => 'Rodyti įrangos naudojimo pabaigos datas lentelės pavidalu',
    'display_qr'                => 'Rodyti QR kodus',
	'display_alt_barcode'		=> 'Rodyti 1D barkodus',
	'barcode_type'				=> '2D barkodo tipas',
	'alt_barcode_type'			=> '1D barkodo tipas',
    'eula_settings'				=> 'EULA nustatymai',
    'eula_markdown'				=> 'Šis EULA leidžia <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'general_settings'			=> 'Bendrieji nustatymai',
	'generate_backup'			=> 'Atsarginė kopija',
    'header_color'              => 'Atraštės spalva',
    'info'                      => 'Šie nustatymai leidžia jums pasirinkti savus diegimo nustatymus.',
    'laravel'                   => 'Laravel versija',
    'ldap_enabled'              => 'LDAP įjungtas',
    'ldap_integration'          => 'LDAP integracija',
    'ldap_settings'             => 'LDAP nustatymai',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'LDAP serveris',
    'ldap_server_help'          => 'Tai turėtų prasidėti su ldap: // (nešifruotam arba TLS) arba ldaps: (jei tai SSL)',
	'ldap_server_cert'			=> 'LDAP SSL sertifikato patvirtinimas',
	'ldap_server_cert_ignore'	=> 'Leisti nepatvirtintą SSL sertifikatą',
	'ldap_server_cert_help'		=> 'Pažymėkite jeigu naudojate savo pasirašytą SSL sertifikatą ir norite naudoti neegzistuojanti SSL sertifikatą.',
    'ldap_tls'                  => 'Naudokite TLS',
    'ldap_tls_help'             => 'Tai turėtų būti tikrinama, jei jūsų LDAP serveryje naudojate STARTTLS.',
    'ldap_uname'                => 'LDAP vartotojo vardas',
    'ldap_pword'                => 'LDAP slaptažodis',
    'ldap_basedn'               => 'DN',
    'ldap_filter'               => 'LDAP filtras',
    'ldap_pw_sync'              => 'LDAP slaptažodžių sinchronizavimas',
    'ldap_pw_sync_help'         => 'Išvalykite šį laukelį, jei nenorite, kad LDAP slaptažodžiai būtų sinchronizuojami su vietiniais slaptažodžiais. Išjungus tai reiškia, kad jūsų vartotojai gali nepavykti prisijungti, jei dėl kokios nors priežasties jūsų LDAP serveris nepasiekiamas.',
    'ldap_username_field'       => 'Vartotojo vardo laukelis',
    'ldap_lname_field'          => 'Pavardė',
    'ldap_fname_field'          => 'LDAP vardas',
    'ldap_auth_filter_query'    => 'LDAP prisijungimo užklausa',
    'ldap_version'              => 'LDAP versija',
    'ldap_active_flag'          => 'LDAP aktyvios vėliavos',
    'ldap_emp_num'              => 'LDAP darbuotojų skaičius',
    'ldap_email'                => 'LDAP el.paštas',
    'load_remote_text'          => 'Nuotoliniai skriptai',
    'load_remote_help_text'		=> 'Šis Snipe-IT įdiegimas gali įtraukti programinius kodus iš interneto.',
    'login_note'                => 'Prisijungimo pastaba',
    'login_note_help'           => 'Pasirinktinai į savo prisijungimo ekraną įtraukite keletą sakinių, pavyzdžiui, kad padėtumėte žmonėms, kurie rasti pamestą ar pavogtą įrenginį. Šiame lauke pritariama <a href="https://help.github.com/articles/github-flavored-markdown/"> "Github" skonio markdown</a>',
    'logo'                    	=> 'Logotipas',
    'full_multiple_companies_support_help_text' => 'Apriboti vartotojai (įskaitant administratorius) priskirtus kompanijoms.',
    'full_multiple_companies_support_text' => 'Pilnas kelių kompanijų palaikymas',
    'optional'					=> 'pasirinktinai',
    'per_page'                  => 'Rezultatai puslapyje',
    'php'                       => 'PHP versija',
    'php_gd_info'               => 'Jūs turite įdiegti PHP-GD, kad rodytų QR kodus, tam peržiūrėkite diegimo instrukcijas.',
    'php_gd_warning'            => 'PHP vaizdo apdorojimas ir GD papildinys neįdiegtas.',
    'pwd_secure_complexity'     => 'Slaptažodžio sudėtingumas',
    'pwd_secure_complexity_help' => 'Pasirinkite bet kurį slaptažodžio sudėtingumo taisykles, kurias norite vykdyti.',
    'pwd_secure_min'            => 'Slaptažodis minimalus simbolių',
    'pwd_secure_min_help'       => 'Minimali leistina vertė yra 5',
    'pwd_secure_uncommon'       => 'Neleiskite bendrų slaptažodžių',
    'pwd_secure_uncommon_help'  => 'Tai neleis vartotojams naudoti bendrų slaptažodžių iš didžiausių 10 000 slaptažodžių, apie kuriuos pranešta pažeidimų metu.',
    'qr_help'                   => 'Įjungti QR kodus prieš nustatant tai',
    'qr_text'                   => 'QR kodo tekstas',
    'setting'                   => 'Nustatymai',
    'settings'                  => 'Nustatymai',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'site_name'                 => 'Interneto puslapio pavadinimas',
    'slack_botname'             => 'Slack\'o boto vardas',
    'slack_channel'             => 'Slack\'o kanalas',
    'slack_endpoint'            => 'Slack\'o galutinis taškas',
    'slack_integration'         => 'Slack\'o nustatymai',
    'slack_integration_help'    => 'Slack\'o integravimas yra pasirinktinis, tačiau kanalas ir galutinis taškas reikalingas jie jūs norite juos naudoti su Slack programėle. Norėdami konfigūruoti Slack\'o integraciją pirmiausia privalote <a href=":slack_link" target="_new">sukurti įeinantį priedą</a> savo turimoje Slack\'o paskyroje.',
    'snipe_version'  			=> 'Snipe-IT versija',
    'system'                    => 'Sistemos informacija',
    'update'                    => 'Atnaujinti nustatymus',
    'value'                     => 'Vertė',
    'brand'                     => 'Prekinis ženklinimas',
    'about_settings_title'      => 'Apie nustatymus',
    'about_settings_text'       => 'Šie nustatymai leidžia jums pasirinkti savus diegimo nustatymus.',
    'labels_per_page'           => 'Etikečių puslapyje',
    'label_dimensions'          => 'Etiketės išmatavimai (coliais)',
    'next_auto_tag_base'        => 'Kitas automatinis prieaugis',
    'page_padding'             => 'Puslapio maržos (coliais)',
    'purge'                    => 'Išvalyti ištrintus įrašus',
    'labels_display_bgutter'    => 'Etiketės apatinis latakai',
    'labels_display_sgutter'    => 'Etiketės pusės latakai',
    'labels_fontsize'           => 'Etiketės šrifto dydis',
    'labels_pagewidth'          => 'Etiketės lapo plotis',
    'labels_pageheight'         => 'Etiketės lapo aukštis',
    'label_gutters'        => 'Etiketės tarpai (coliais)',
    'page_dimensions'        => 'Puslapio matmenys (coliais)',
    'label_fields'          => 'Žymėti laukus',
    'inches'        => 'colių',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Nuoroda į "Snipe-IT" el. Paštu',
    'show_url_in_emails_help_text'      => 'Atžymėkite šį langelį, jei nenorite susieti savo "Snipe-IT" diegimo savo el. Pašto dėžutėse. Naudinga, jei dauguma jūsų naudotojų niekada nebus prisijungę.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Didžiausias miniatiūros aukštis',
    'thumbnail_max_h_help'   => 'Didžiausias pikselių aukštis gali būti, kad miniatiūros gali būti rodomos sąrašo rodinyje. Min 25, maks. 500.',
    'two_factor'        => 'Du veiksnių autentifikavimas',
    'two_factor_secret'        => 'Dviejų veiksnių kodas',
    'two_factor_enrollment'        => 'Dviejų veiksnių registracija',
    'two_factor_enabled_text'        => 'Įgalinti du veiksnius',
    'two_factor_reset'        => 'Atstatyti dviejų veiksnių paslaptį',
    'two_factor_reset_help'        => 'Tai privers naudotoją vėl įrašyti įrenginį "Google" autentifikavimo priemone. Tai gali būti naudinga, jei jų šiuo metu užregistruotas įrenginys yra pamestas ar pavogtas.',
    'two_factor_reset_success'          => 'Dviejų veiksnių įrenginys sėkmingai iš naujo nustatomas',
    'two_factor_reset_error'          => 'Dviejų veiksnių įrenginio atstatymas nepavyko',
    'two_factor_enabled_warning'        => 'Įjungus dviejų faktorių, jei jis šiuo metu neįjungtas, iš karto privers jus patvirtinti autentifikavimu naudojant "Google" prijungtą įrenginį. Jūs turėsite galimybę įregistruoti savo įrenginį, jei jis šiuo metu nėra įtrauktas.',
    'two_factor_enabled_help'        => 'Tai įgalins dviejų veiksnių autentifikavimą naudojant "Google Authenticator".',
    'two_factor_optional'        => 'Atrankinis (vartotojai gali įjungti arba išjungti, jei tai leidžiama)',
    'two_factor_required'        => 'Reikalingas visiems vartotojams',
    'two_factor_disabled'        => 'Neįgalus',
    'two_factor_enter_code'	=> 'Įveskite dviejų veiksnių kodą',
    'two_factor_config_complete'	=> 'Pateikti kodeksą',
    'two_factor_enabled_edit_not_allowed' => 'Jūsų administratorius neleidžia jums redaguoti šio nustatymo.',
    'two_factor_enrollment_text'	=> "Būtina atlikti du autentiškumo patvirtinimo veiksnius, tačiau jūsų įrenginys dar nebuvo užregistruotas. Atidarykite \"Google\" autentifikavimo priemonės programą ir nuskaitykite žemiau esantį QR kodą, kad užsiregistruotumėte savo įrenginį. Įrašę savo įrenginį įveskite žemiau esantį kodą",
    'require_accept_signature'      => 'Reikalauti parašo',
    'require_accept_signature_help_text'      => 'Įjungus šią funkciją, naudotojams reikės fiziškai atsisakyti priimti turtą.',
    'left'        => 'kairėje',
    'right'        => 'teisus',
    'top'        => 'viršuje',
    'bottom'        => 'apačioje',
    'vertical'        => 'vertikalus',
    'horizontal'        => 'horizontalus',
    'zerofill_count'        => 'Turto žymų ilgis, įskaitant "zerofill"',
);
