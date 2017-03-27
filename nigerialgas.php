<?php

/**
 * Return a list of all the counties
 */

function nigerialgas_listcounties() {
  $countryIso = 'NG';
  $counties = array(
    'Abia State' => array(
      'Grad Beograd',
      'Gradska opština Barajevo',
      'Gradska opština Voždovac',
      'Gradska opština Vračar',
      'Gradska opština Grocka',
      'Gradska opština Zvezdara',
      'Gradska opština Zemun',
      'Gradska opština Lazarevac',
      'Gradska opština Mladenovac',
      'Gradska opština Novi Beograd',
      'Gradska opština Obrenovac',
      'Gradska opština Palilula',
      'Gradska opština Rakovica',
      'Gradska opština Savski Venac',
      'Gradska opština Sopot',
      'Gradska opština Stari Grad',
      'Gradska opština Surčin',
      'Gradska opština Čukarica',
    ),
    'Adamawa State' => array(
      'Bačka Topola',
      'Mali Iđoš',
      'Grad Subotica',
    ),
    'Akwa Ibom State' => array(
      'Žitište',
      'Grad Zrenjanin',
      'Nova Crnja',
      'Novi Bečej',
      'Sečanj',
    ),
    'Anambra State' => array(
      'Ada',
      'Kanjiža',
      'Grad Kikinda',
      'Novi Kneževac',
      'Senta',
      'Čoka',
    ),
    'Bauchi State' => array(
      'Alibunar',
      'Bela Crkva',
      'Grad Vršac',
      'Kovačica',
      'Kovin',
      'Opovo',
      'Grad Pančevo',
      'Plandište',
    ),
    'Bayelsa State' => array(
      'Apatin',
      'Kula',
      'Odžaci',
      'Grad Sombor',
    ),
    'Benue State' => array(
      'Bač',
      'Bačka Palanka',
      'Bački Petrovac',
      'Beočin',
      'Bečej',
      'Vrbas',
      'Žabalj',
      'Grad Novi Sad',
      'Srbobran',
      'Sremski Karlovci',
      'Temerin',
      'Titel',
    ),
    'Borno State' => array(
      'Inđija',
      'Irig',
      'Pećinci',
      'Ruma',
      'Grad Sremska Mitrovica',
      'Stara Pazova',
      'Šid',
    ),
    'Cross River State' => array(
      'Bogatić',
      'Vladimirci',
      'Koceljeva',
      'Krupanj',
      'Grad Loznica',
      'Ljubovija',
      'Mali Zvornik',
      'Grad Šabac',
    ),
    'Delta State' => array(
      'Grad Valjevo',
      'Lajkovac',
      'Ljig',
      'Mionica',
      'Osečina',
      'Ub',
    ),
    'Ebonyi State' => array(
      'Arilje',
      'Bajina Bašta',
      'Kosjerić',
      'Nova Varoš',
      'Požega',
      'Priboj',
      'Prijepolje',
      'Sjenica',
      'Grad Užice',
      'Čajetina',
    ),
    'Edo State' => array(
      'Velika Plana',
      'Grad Smederevo',
      'Smederevska Palanka',
    ),
    'Ekiti State' => array(
      'Aranđelovac',
      'Batočina',
      'Knić',
      'Grad Kragujevac',
      'Lapovo',
      'Rača',
      'Topola',
    ),
    'Enugu State' => array(
      'Despotovac',
      'Grad Jagodina',
      'Paraćin',
      'Rekovac',
      'Svilajnac',
      'Ćuprija',
    ),
    'FCT' => array(
      'Gornji Milanovac',
      'Ivanjica',
      'Lučani',
      'Grad Čačak',
    ),
    'Gombe State' => array(
      'Vrnjačka Banja',
      'Grad Kraljevo',
      'Grad Novi Pazar',
      'Raška',
      'Tutin',
    ),
    'Imo State' => array(
      'Aleksandrovac',
      'Brus',
      'Varvarin',
      'Grad Kruševac',
      'Trstenik',
      'Ćićevac',
    ),
    'Jigawa State' => array(
      'Gradska opština Požarevac',
      'Veliko Gradište',
      'Golubac',
      'Žabari',
      'Žagubica',
      'Kučevo',
      'Malo Crniće',
      'Petrovac na Mlavi',
    ),
    'Kaduna State' => array(
      'Bor',
      'Kladovo',
      'Majdanpek',
      'Negotin',
    ),
    'Kano State' => array(
      'Boljevac',
      'Grad Zaječar',
      'Knjaževac',
      'Sokobanja',
    ),
    'Katsina State' => array(
      'Grad Niš',
      'Gradska opština Medijana',
      'Gradska opština Palilula',
      'Gradska opština Crveni Krst',
      'Gradska opština Pantelej',
      'Gradska opština Niška Banja',
      'Aleksinac',
      'Gadžin Han',
      'Doljevac',
      'Merošina',
      'Ražanj',
      'Svrljig',
    ),
    'Kebbi State' => array(
      'Blace',
      'Žitorađa',
      'Kuršumlija',
      'Prokuplje',
    ),
    'Kogi State' => array(
      'Babušnica',
      'Bela Palanka',
      'Dimitrovgrad',
      'Grad Pirot',
    ),
    'Kwara State' => array(
      'Bojnik',
      'Vlasotince',
      'Lebane',
      'Grad Leskovac',
      'Medveđa',
      'Crna Trava',
    ),
    'Lagos State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
    'Nasarawa State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
    'Niger State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
    'Ogun State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
    'Ondo State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
    'Osun State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
    'Oyo State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
    'Plateau State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
    'Rivers State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
    'Sokoto State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
    'Taraba State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
    'Yobe State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
    'Zamfara State' => array(
      'Grad Vranje',
      'Bosilegrad',
      'Bujanovac',
      'Vladičin Han',
      'Preševo',
      'Surdulica',
      'Trgovište',
    ),
  );

  return array($countryIso => $counties);
}

/**
 * Check and load counties
 */

function nigerialgas_loadcounties() {

  $allCounties = nigerialgas_listcounties();

  foreach ($allCounties as $countryIso => $counties) {
    static $dao = NULL;
    if (!$dao) {
      $dao = new CRM_Core_DAO();
    }

    // Get array of states.
    try {
      $result = civicrm_api3('Country', 'getsingle', array(
        'iso_code' => $countryIso,
        'api.Address.getoptions' => array(
          'field' => 'state_province_id',
          'country_id' => '$value.id',
          'sequential' => 0,
        ),
      ));
    }
    catch (CiviCRM_API3_Exception $e) {
      $error = $e->getMessage();
      CRM_Core_Error::debug_log_message(ts('API Error: %1', array(
        'domain' => 'org.ndi.nigerialgas',
        1 => $error,
      )));
      return FALSE;
    }

    if (empty($result['api.Address.getoptions']['values'])) {
      return FALSE;
    }
    $states = $result['api.Address.getoptions']['values'];

    // go state-by-state to check existing counties

    foreach ($counties as $stateName => $state) {
      $id = array_search($stateName, $states);
      if ($id === FALSE) {
        continue;
      }

      $check = "SELECT name FROM civicrm_county WHERE state_province_id = $id";
      $results = CRM_Core_DAO::executeQuery($check);
      $existing = array();
      while ($results->fetch()) {
        $existing[] = $results->name;
      }

      // identify counties needing to be loaded
      $add = array_diff($state, $existing);

      $insert = array();
      foreach ($add as $county) {
        $countye = $dao->escape($county);
        $insert[] = "('$countye', $id)";
      }

      // put it into queries of 50 counties each
      for($i = 0; $i < count($insert); $i = $i+50) {
        $inserts = array_slice($insert, $i, 50);
        $query = "INSERT INTO civicrm_county (name, state_province_id) VALUES ";
        $query .= implode(', ', $inserts);
        CRM_Core_DAO::executeQuery($query);
      }
    }
  }

  return TRUE;
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function nigerialgas_civicrm_install() {
  nigerialgas_loadcounties();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function nigerialgas_civicrm_enable() {
  nigerialgas_loadcounties();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function nigerialgas_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  nigerialgas_loadcounties();
}
