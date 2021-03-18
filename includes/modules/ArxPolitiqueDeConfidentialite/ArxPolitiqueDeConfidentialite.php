<?php

class SIMP_ArxPolitiqueDeConfidentialite extends ET_Builder_Module {

	public $slug       = 'simp_arx_politique_de_confidentialite';
	public $vb_support = 'on';

	public function init() {
		$this->name = esc_html__( 'Arx Politique de Confidentialité', 'simp-arx-politique-de-confidentialite' );
	}

	public function get_fields() {
		return array(

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
				'description'     => esc_html__('Content entered here will appear below the heading text.', 'simp-simple-extension'),
				'show_if'         => array(
					'content'	  => 'off'
				)
			 ),
		);
	}

	public function render($unprocessed_props, $content = null, $render_slug)
	{
		return sprintf(
		
		//STRING ZONE
			'<h1 style="text-transform:uppercase; font-weight:bold; margin-bottom:20px;">Politique de confidentialité</h1>
			
			<h2>Définitions : </h2>
			<p>
			L’Éditeur : La personne, physique ou morale, qui édite les services de communication au public en ligne.</p>
			<p>Le Site : L’ensemble des sites, pages Internet et services en ligne proposés par l’Éditeur.</p>
			<p>L’Utilisateur : La personne utilisant le Site et les services.
			</p>
			
			<h2>Nature des données collectées</h2>
			<p>
			Dans le cadre de l’utilisation des Sites, l’Éditeur est susceptible de collecter les catégories de données suivantes concernant ses Utilisateurs :</p>
			<p>Données d’état-civil, d’identité, d’identification…
			</p>
			
			<h2>Communication des données personnelles à des tiers</h2>
			<p>
			Pas de communication à des tiers</p>
			<p>Vos données ne font l’objet d’aucune communication à des tiers. Vous êtes toutefois informés qu’elles pourront être divulguées en application d’une loi, d’un règlement ou en vertu d’une décision d’une autorité réglementaire ou judiciaire compétente.
			</p>
			
			<h2>Information préalable pour la communication des données personnelles à des tiers en cas de fusion / absorption</h2>
			<p>
			Collecte de l’opt-in (consentement) préalable à la transmission des données suite à une fusion / acquisition</p>
			<p>Dans le cas où nous prendrions part à une opération de fusion, d’acquisition ou à toute autre forme de cession d’actifs, nous nous engageons à obtenir votre consentement préalable à la transmission de vos données personnelles et à maintenir le niveau de confidentialité de vos données personnelles auquel vous avez consenti.
			</p>
			
			<h2>Finalité de la réutilisation des données personnelles collectées</h2>
			<p>
			Effectuer les opérations relatives à la gestion des clients concernant</p>
			<p>•les contrats ; les commandes ; les livraisons ; les factures ; la comptabilité et en particulier la gestion des comptes clients</p>
			<p>•un programme de fidélité au sein d’une entité ou plusieurs entités juridiques ;</p>
			<p>•le suivi de la relation client tel que la réalisation d’enquêtes de satisfaction, la gestion des réclamations et du service après-vente</p>
			<p>•la sélection de clients pour réaliser des études, sondages et tests produits (sauf consentement des personnes concernées recueilli dans les conditions prévues à l’article 6, ces opérations ne doivent pas conduire à l’établissement de profils susceptibles de faire apparaître des données sensibles – origines raciales ou ethniques, opinions philosophiques, politiques, syndicales, religieuses, vie sexuelle ou santé des personnes)
			</p>
			
			<h2>Agrégation des données</h2>
			<p>
			Agrégation avec des données non personnelles</p>
			<p>Nous pouvons publier, divulguer et utiliser les informations agrégées (informations relatives à tous nos Utilisateurs ou à des groupes ou catégories spécifiques d’Utilisateurs que nous combinons de manière à ce qu’un Utilisateur individuel ne puisse plus être identifié ou mentionné) et les informations non personnelles à des fins d’analyse du secteur et du marché, de profilage démographique, à des fins promotionnelles et publicitaires et à d’autres fins commerciales.</p>
			<p>Agrégation avec des données personnelles disponibles sur les comptes sociaux de l’Utilisateur</p>
			<p>Si vous connectez votre compte à un compte d’un autre service afin de faire des envois croisés, ledit service pourra nous communiquer vos informations de profil, de connexion, ainsi que toute autre information dont vous avez autorisé la divulgation. Nous pouvons agréger les informations relatives à tous nos autres Utilisateurs, groupes, comptes, aux données personnelles disponibles sur l’Utilisateur.
			</p>
			
			<h2>Collecte des données d’identité</h2>
			<p>
			Consultation libre</p>
			<p>La consultation du Site ne nécessite pas d’inscription ni d’identification préalable. Elle peut s’effectuer sans que vous ne communiquiez de données nominatives vous concernant (nom, prénom, adresse, etc). Nous ne procédons à aucun enregistrement de données nominatives pour la simple consultation du Site.</p>
			<p>Collecte des données d’identification</p>
			<p>Utilisation de l’identifiant de l’utilisateur uniquement pour l’accès aux services</p>
			<p>Nous utilisons vos identifiants électroniques seulement pour et pendant l’exécution du contrat.
			</p>
			
			<h2>Géolocalisation</h2>
			<p>
			Géolocalisation à des fins de fourniture du service</p>
			<p>Nous collectons et traitons vos données de géolocalisation afin de vous fournir nos services. Nous pouvons être amenés à faire usage des données personnelles dans le but de déterminer votre position géographique en temps réel. Conformément à votre droit d’opposition prévu par la loi n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, vous avez la possibilité, à tout moment, de désactiver les fonctions relatives à la géolocalisation.</p>
			<p>Géolocalisation à des fins de croisement</p>
			<p>Nous collectons et traitons vos données de géolocalisation afin de permettre à nos services d’identifier les points de croisement dans le temps et dans l’espace avec d’autres Utilisateurs du service afin de vous présenter le profil des Utilisateurs croisés. Conformément à votre droit d’opposition prévu par la loi n°78-17du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, vous avez la possibilité, à tout moment, de désactiver les fonctions relatives à la géolocalisation. Vous reconnaissez alors que le service ne sera plus en mesure de vous présenter de profil des autres Utilisateurs.</p>
			<p>Géolocalisation avec mise à disposition des partenaires pour référencement et agrégation (avec opt-in) Nous pouvons collecter et traiter vos données de géolocalisation avec nos partenaires. Nous nous engageons à anonymiser les données utilisées. Conformément à votre droit d’opposition prévu par la loi n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, vous avez la possibilité, à tout moment, de désactiver les fonctions relatives à la géolocalisation.
			</p>
			
			<h2>Collecte des données du terminal</h2>
			<p>
			Collecte des données de profilage et des données techniques à des fins de fourniture du service Certaines des données techniques de votre appareil sont collectées automatiquement par le Site. Ces informations incluent notamment votre adresse IP, fournisseur d’accès à Internet, configuration matérielle, configuration logicielle, type et langue du navigateur… La collecte de ces données est nécessaire à la fourniture des services.</p>
			<p>Collecte des données techniques à des fins publicitaires, commerciales et statistiques</p>
			<p>Les données techniques de votre appareil sont automatiquement collectées et enregistrées par le Site, à des fins publicitaires, commerciales et statistiques. Ces informations nous aident à personnaliser et à améliorer continuellement votre expérience sur notre Site. Nous ne collectons ni ne conservons aucune donnée nominative (nom, prénom, adresse…) éventuellement attachée à une donnée technique. Les données collectées sont susceptibles d’être revendues à des tiers.
			</p>
			
			<h2>Cookies</h2>
			<p>
			<a href="#cookies">Gérer les cookie de ce site</a></p>
			<p>Durée de conservation des cookies</p>
			<p>Conformément aux recommandations de la CNIL, la durée maximale de conservation des cookies est de 13 mois au maximum après leur premier dépôt dans le terminal de l’Utilisateur, tout comme la durée de la validité du consentement de l’Utilisateur à l’utilisation de ces cookies. La durée de vie des cookies n’est pas prolongée à chaque visite. Le consentement de l’Utilisateur devra donc être renouvelé à l’issue de ce délai.</p>
			<p>Finalité cookies</p>
			<p>Les cookies peuvent être utilisés pour des fins statistiques notamment pour optimiser les services rendus à l’Utilisateur, à partir du traitement des informations concernant la fréquence d’accès, la personnalisation des pages ainsi que les opérations réalisées et les informations consultées.</p>
			<p>Vous êtes informé que l’Éditeur est susceptible de déposer des cookies sur votre terminal. Le cookie enregistre des informations relatives à la navigation sur le service (les pages que vous avez consultées, la date et l’heure de la consultation…) que nous pourrons lire lors de vos visites ultérieures.</p>
			<p>Droit de l’Utilisateur de refuser les cookies</p>
			<p>Vous reconnaissez avoir été informé que l’Éditeur peut avoir recours à des cookies. Si vous ne souhaitez pas que des cookies soient utilisés sur votre terminal, la plupart des navigateurs vous permettent de désactiver les cookies en passant par les options de réglage.
			</p>
			
			<h2>Conservation des données techniques</h2>
			<p>
			Durée de conservation des données techniques</p>
			<p>Les données techniques sont conservées pour la durée strictement nécessaire à la réalisation des finalités visées ci-avant.
			</p>
			
			<h2>Délai de conservation des données personnelles et d’anonymisation</h2>
			<p>
			Pas de conservation des données</p>
			<p>Nous ne conservons aucune donnée personnelle au delà de votre durée de connexion au service pour les finalités décrites dans les présentes CGU.</p>
			<p>Suppression des données après suppression du compte</p>
			<p>Des moyens de purge de données sont mis en place afin d’en prévoir la suppression effective dès lors que la durée de conservation ou d’archivage nécessaire à l’accomplissement des finalités déterminées ou imposées est atteinte. Conformément à la loi n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, vous disposez par ailleurs d’un droit de suppression sur vos données que vous pouvez exercer à tout moment en prenant contact avec l’Éditeur.</p>
			<p>Suppression des données après 3 ans d’inactivité</p>
			<p>Pour des raisons de sécurité, si vous ne vous êtes pas authentifié sur le Site pendant une période de trois ans, vous recevrez un e-mail vous invitant à vous connecter dans les plus brefs délais, sans quoi vos données seront supprimées de nos bases de données.
			</p>
			
			<h2>Suppression du compte</h2>
			<p>
			Suppression du compte à la demande</p>
			<p>L’Utilisateur a la possibilité de supprimer son Compte à tout moment, par simple demande à l’Éditeur OU par le menu de suppression de Compte présent dans les paramètres du Compte le cas échéant.</p>
			<p>Suppression du compte en cas de violation des CGU</p>
			<p>En cas de violation d’une ou de plusieurs dispositions des CGU ou de tout autre document incorporé aux présentes par référence, l’Éditeur se réserve le droit de mettre fin ou restreindre sans aucun avertissement préalable et à sa seule discrétion, votre usage et accès aux services, à votre compte et à tous les Sites.
			</p>
			
			<h2>Indications en cas de faille de sécurité décelée par l’Éditeur</h2>
			<p>
			Information de l’Utilisateur en cas de faille de sécurité</p>
			<p>Nous nous engageons à mettre en oeuvre toutes les mesures techniques et organisationnelles appropriées afin de garantir un niveau de sécurité adapté au regard des risques d’accès accidentels, non autorisés ou illégaux, de divulgation, d’altération, de perte ou encore de destruction des données personnelles vous concernant. Dans l’éventualité où nous prendrions connaissance d’un accès illégal aux données personnelles vous concernant stockées sur nos serveurs ou ceux de nos prestataires, ou d’un accès non autorisé ayant pour conséquence la réalisation des risques identifiés ci-dessus, nous nous engageons à :</p>
			<p>•Vous notifier l’incident dans les plus brefs délais ;</p>
			<p>•Examiner les causes de l’incident et vous en informer ;</p>
			<p>•Prendre les mesures nécessaires dans la limite du raisonnable afin d’amoindrir les effets négatifs et préjudices pouvant résulter dudit incident</p>
			<p>Limitation de la responsabilité</p>
			<p>En aucun cas les engagements définis au point ci-dessus relatifs à la notification en cas de faille de sécurité ne peuvent être assimilés à une quelconque reconnaissance de faute ou de responsabilité quant à la survenance de l’incident en question.
			</p>
			
			<h2>Transfert des données personnelles à l’étranger</h2>
			<p>
			Pas de transfert en dehors de l’Union européenne</p>
			<p>L’Éditeur s’engage à ne pas transférer les données personnelles de ses Utilisateurs en dehors de l’Union européenne.</p>
			<p>Modification des CGU et de la politique de confidentialité</p>
			<p>En cas de modification des présentes CGU, engagement de ne pas baisser le niveau de confidentialité de manière substantielle sans l’information préalable des personnes concernées</p>
			<p>Nous nous engageons à vous informer en cas de modification substantielle des présentes CGU, et à ne pas baisser le niveau de confidentialité de vos données de manière substantielle sans vous en informer et obtenir votre consentement.
			</p>
			
			<h2>Droit applicable et modalités de recours</h2>
			<p>
			Application du droit français (législation CNIL) et compétence des tribunaux</p>
			<p>Les présentes CGU et votre utilisation du Site sont régies et interprétées conformément aux lois de France, et notamment à la Loi n° 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés. Le choix de la loi applicable ne porte pas atteinte à vos droits en tant que consommateur conformément à la loi applicable de votre lieu de résidence. Si vous êtes un consommateur, vous et nous acceptons de se soumettre à la compétence non-exclusive des juridictions françaises, ce qui signifie que vous pouvez engager une action relative aux présentes CGU en France ou dans le pays de l’UE dans lequel vous vivez. Si vous êtes un professionnel, toutes les actions à notre encontre doivent être engagées devant une juridiction en France.</p>
			<p>En cas de litige, les parties chercheront une solution amiable avant toute action judiciaire. En cas d’échec de ces tentatives, toutes contestations à la validité, l’interprétation et / ou l’exécution des présentes CGU devront être portées même en cas de pluralité des défendeurs ou d’appel en garantie, devant les tribunaux français.
			</p>
			
			<h2>Portabilité des données</h2>
			<p>
			Portabilité des données</p>
			<p>L’Éditeur s’engage à vous offrir la possibilité de vous faire restituer l’ensemble des données vous concernant sur simple demande. L’Utilisateur se voit ainsi garantir une meilleure maîtrise de ses données, et garde la possibilité de les réutiliser. Ces données devront être fournies dans un format ouvert et aisément réutilisable.
			</p>',

		//DECLARATION ZONE : (order ?)

			esc_html($this->props['heading']),
			$this->props['content']
		);
	}
}

new SIMP_ArxPolitiqueDeConfidentialite;
