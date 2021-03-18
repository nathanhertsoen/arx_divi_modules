<?php

class SIMP_ArxMentionsLegales extends ET_Builder_Module {

	public $slug       = 'simp_arx_mentions_legales';
	public $vb_support = 'on';

	public function init() {
		$this->name = esc_html__( 'Arx Mentions Légales', 'simp-arx-mentions-legales' );
	}

	public function get_fields() {
		return array(
			
		// CUSTOMER ZONE
			'heading' => array(
				'label'           => esc_html__('Ne pas utiliser', 'simp-simple-extension'),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__('Input your desired heading here.', 'simp-simple-extension'),
				'toggle_slug'     => 'main_content',
				'show_if'         => array(
					'content'	  => 'off'
				)
			 ),
			 'content'     => array(
				'label'           => esc_html__('Ne pas utiliser', 'simp-simple-extension'),
				'type'            => 'tiny_mce',
				'toggle_slug'     => 'main_content',
				'option_category' => 'basic_option',
				'description'     => esc_html__('Content entered here will appear below the heading text.', 'simp-simple-extension', 'test'),
				'show_if'         => array(
					'content'	  => 'off'
				)
			 ),
			'raison_sociale'     => array(
				'label'           => esc_html__( 'Raison Sociale', 'simp-arx-mentions-legales' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired heading here.', 'simp-arx-mentions-legales' ),
				// 'toggle_slug'     => 'main_content'
			),
			'siret'     => array(
				'label'           => esc_html__( 'Siret', 'simp-arx-mentions-legales' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired heading here.', 'simp-arx-mentions-legales' ),
				// 'toggle_slug'     => 'main_content'
			),
			'adresse'     => array(
				'label'           => esc_html__( 'Adresse physique', 'simp-arx-mentions-legales' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'L\'adresse vers le siège du client.', 'simp-arx-mentions-legales' ),
				// 'toggle_slug'     => 'main_content'
			),
			'responsable_publication'     => array(
				'label'           => esc_html__( 'Responsable publication', 'simp-arx-mentions-legales' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired heading here.', 'simp-arx-mentions-legales' ),
				// 'toggle_slug'     => 'main_content'
			),
			'rcs'     => array(
				'label'           => esc_html__( 'R.C.S', 'simp-arx-mentions-legales' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Acronyme RCS ; Lieu d\'immatriculation ; Lettre A ou B (commerce ou société) ; Numéro SIREN', 'simp-arx-mentions-legales' ),
				// 'toggle_slug'     => 'main_content'
			),
			'adresse_site'     => array(
				'label'           => esc_html__( 'Nom de domaine', 'simp-arx-mentions-legales' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Le nom de domaine du site client.', 'simp-arx-mentions-legales' ),
				// 'toggle_slug'     => 'main_content'
			),
			'hyperlien_client'     => array(
				'label'           => esc_html__( 'Hyperlien vers le site', 'simp-arx-mentions-legales' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( '<a>L\'hyperlien menant vers le site client.</a>', 'simp-arx-mentions-legales' ),
				// 'toggle_slug'     => 'main_content'
			),
			

		// AGENCY ZONE
			'agence'     => array(
				'default'		  => 'Arexpo Agence Web à Dunkerque | Création de site internet Dunkerque Nord',
				'label'           => esc_html__( 'Agence', 'simp-arx-mentions-legales' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'L\'agence ayant développé le site web du client.', 'simp-arx-mentions-legales' ),
				// 'toggle_slug'     => 'main_content'
			),	
			'hyperlien_agence'    => array(
				'default'		  => 'https://www.arexpo.fr/nos-services/creation-de-sites-internet/',
				'label'           => esc_html__( 'Hyperlien Agence', 'simp-arx-mentions-legales' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( '<a>L\'hyperlien vers de site de l\'agence ayant developpé le site.</a>', 'simp-arx-mentions-legales' ),
				// 'toggle_slug'     => 'main_content'
			),
			'hebergeur'     => array(
				'default'		  => 'Zetark – 246 Route du Chapeau Rouge, 59229 Téteghem-Coudekerque-Village',
				'label'           => esc_html__( 'Hébergeur', 'simp-arx-mentions-legales' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Nom de l\'entreprise hébergeant le site et adresse physique.', 'simp-arx-mentions-legales' ),
				// 'toggle_slug'     => 'main_content'
			),
			'webmestre'     => array(
				'default'		  => 'Arexpo – contact@arexpo.fr',
				'label'           => esc_html__( 'Webmestre', 'simp-arx-mentions-legales' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__('L\'agence de création du site.', 'simp-arx-mentions-legales' ),
				// 'toggle_slug'     => 'main_content'
			),
			'email_webmestre'     => array(
				'default'		  => 'contact@arexpo.fr',
				'label'           => esc_html__( 'Email webemestre', 'simp-arx-mentions-legales' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( '<a>Adresse email pour contacter l\'agence de création du site.</a>', 'simp-arx-mentions-legales' ),
				// 'toggle_slug'     => 'main_content'
			),
		);
	}

	public function render($unprocessed_props, $content = null, $render_slug)
	{
		return sprintf(
		
		// INDEX ZONE
			// 		 	%1$s		:		HEADING : Essentiel : ne pas supprimer, mais ne pas utiliser
			// 		 	%2$s		:		CONTENT : Essentiel : ne pas supprimer, mais ne pas utiliser
			// 			%3$s		: 		Raison sociale (client)
		    //			%4$s		:	 	SIRET (client)
			//			%5$s		: 		Adresse (client)
			//			%6$s		: 		Responsable publication (client)
			//			%7$s		: 		RCS	(client)
			//			%8$s		: 		Adresse Site (client)
			//			%9$s		:		Hyperlien site (client)
			//			%10$s		: 		Webmestre (agence)						: default : Arexpo – contact@arexpo.fr
			//			%11$s		:		Agence de création du site (agence) 	: default :  Arexpo Agence Web à Dunkerque | Création de site internet Dunkerque Nord
			//			%12$s		:		Hébergeur (agence) 						: default : Zetark – 246 Route du Chapeau Rouge, 59229 Téteghem-Coudekerque-Village
			//			%13$s		: 		Hyperlien site (agence) 				: default : https://www.arexpo.fr/nos-services/creation-de-sites-internet/
			//			%14$s		:		Webmestre adresse email de contact 		: default : contact@arexpo.fr
		
		//STRING ZONE
			'<h1 style="text-transform:uppercase; font-weight:bold; margin-bottom:20px;">Mentions légales</h1>

			<p>En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site <a href="%9$s">%8$s</a> l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
			<p style="margin-bottom:50px;">Propriétaire : <span style="text-transform:uppercase;">%3$s</span> – %4$s – <span style="text-transform:uppercase;">%5$s</span><br /> Créateur : <a href="%13$s" target="_blank" rel="noopener">%11$s</a><br /> Responsable publication : <span style="text-transform:uppercase;">%6$s</span> – <span style="text-transform:uppercase;">%7$s</span><br /> Le responsable publication est une personne physique ou une personne morale.<br /> Webmestre : <a href="mailto:%14$s">%10$s</a><br /> Hébergeur : %12$s</p>
				
					
					
				<h2>2 &#8211; Conditions générales d’utilisation du site et des services proposés</h2>
			<p>L’utilisation du site <a href="%9$s">%8$s</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="%9$s">%8$s</a> sont donc invités à les consulter de manière régulière.</p>
			<p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par %3$s, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
			<p style="margin-bottom:50px;">Le site <a href="%9$s">%8$s</a> est mis à jour régulièrement par <span style="text-transform:uppercase;">%6$s</span>. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</div>
				
					
					
					<h2>3 &#8211; Description des services fournis</h2>
			<p>Le site <a href="%9$s">%8$s</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
			<p>%3$s s’efforce de fournir sur le site <a href="%9$s">%8$s</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
			<p style="margin-bottom:50px;">Tous les informations indiquées sur le site <a href="%9$s">%8$s</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="%9$s">%8$s</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p></div>

				
				
					<h2>4 &#8211; Limitations contractuelles sur les données techniques</h2>
			<p>
			Le site utilise la technologie JavaScript.</p>
			<p style="margin-bottom:50px;">Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour
			</p>
					
					
				<h2>5 &#8211; Propriété intellectuelle et contrefaçons</h2>
			<p>
			%3$s est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
			<p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : %3$s .</p>
			<p style="margin-bottom:50px;">Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.
			</p>
					
					
				<h2>6 &#8211; Limitations de responsabilité</h2>
			<p>
			%3$s ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site  <a href="%9$s">%8$s</a>, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
			<p>%3$s ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site   <a href="#">%8$s</a>.</p>
			<p style="margin-bottom:50px;">Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. %3$s se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, %3$s se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).
			</p>
					
					
					<h2>7 &#8211; Gestion des données personnelles</h2>
			<p>
			En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l’article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
			<p>A l’occasion de l’utilisation du site  <a href="%9$s">%8$s</a>, peuvent êtres recueillies : l’URL des liens par l’intermédiaire desquels l’utilisateur a accédé au site   <a href="#">%8$s</a>, le fournisseur d’accès de l’utilisateur, l’adresse de protocole Internet (IP) de l’utilisateur.</p>
			<p>En tout état de cause %3$s ne collecte des informations personnelles relatives à l’utilisateur que pour le besoin de certains services proposés par le site  <a href="#">%8$s</a>. L’utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu’il procède par lui-même à leur saisie. Il est alors précisé à l’utilisateur du site  <a href="%9$s">%8$s</a> l’obligation ou non de fournir ces informations.</p>
			<p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
			<p>Aucune information personnelle de l’utilisateur du site  <a href="%9$s">%8$s</a> n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l’hypothèse du rachat de %3$s et de ses droits permettrait la transmission des dites informations à l’éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l’utilisateur du site   <a href="%9$s">%8$s</a>.</p>
			<p style="margin-bottom:50px;">Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.
			</p>
					
					
					<h2>8 &#8211; Liens hypertextes et cookies</h2>
			<p>
			Le site  <a href="%9$s">%8$s</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de %3$s. Cependant, %3$s n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
			<p>La navigation sur le site  <a href="%9$s">%8$s</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
			<p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
			<p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l’onglet Options. Cliquer sur l’onglet Vie privée.<br />
			Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés pour l’historique. Enfin décochez-la pour désactiver les cookies.</p>
			<p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section « Confidentialité », cliquez sur préférences. Dans l’onglet « Confidentialité », vous pouvez bloquer les cookies.</p>
			<p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section « Confidentialité », cliquez sur Paramètres de contenu. Dans la section « Cookies », vous pouvez bloquer les cookies.</p>
			<p style="margin-bottom:50px;">Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.
			</p>
					
					
					<h2>9 &#8211; Droit applicable et attribution de juridiction</h2>
			<p style="margin-bottom:50px;">
			Tout litige en relation avec l’utilisation du site  <a href="%9$s">%8$s</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.
			</p>
					
					
				<h2>10 &#8211; Les principales lois concernées</h2>
			<p>
			Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l’informatique, aux fichiers et aux libertés.</p>
			<p style="margin-bottom:50px;">Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique.
			</p>
					
					
					<h2>11 &#8211; Lexique</h2>
			<p>
			Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
			<p style="margin-bottom:50px;">Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l’identification des personnes physiques auxquelles elles s’appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).
			</p>',

		//DECLARATION ZONE : (order ?)

			esc_html($this->props['heading']),
			$this->props['content'],
			$this->props['raison_sociale'],
			$this->props['siret'],
			$this->props['adresse'],
			$this->props['responsable_publication'],
			$this->props['rcs'],
			$this->props['adresse_site'],
			$this->props['hyperlien_client'],
			$this->props['webmestre'],
			$this->props['agence'],
			$this->props['hebergeur'],
			$this->props['hyperlien_agence'],
			$this->props['email_webmestre'],
		);
	}
}

new SIMP_ArxMentionsLegales;
