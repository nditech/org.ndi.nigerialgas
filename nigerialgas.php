<?php

/**
 * Return a list of all the counties
 */

function nigerialgas_listcounties() {
  $countryIso = 'NG';
  $counties = array(
    'Abia State' => array(
      'Aba North',
      'Aba South',
      'Arochukwu',
      'Bende',
      'Ikwuano',
      'Isiala Ngwa North',
      'Isiala Ngwa South',
      'Isuikwuato',
      'Obi Ngwa',
      'Ohafia',
      'Osisioma',
      'Ugwunagbo',
      'Ukwa East',
      'Ukwa West',
      'Umuahia North',
      'Umuahia South',
      'Umu Nneochi',
    ),
    'Adamawa State' => array(
      'Demsa',
      'Fufure',
      'Ganye',
      'Gayuk',
      'Gombi',
      'Grie',
      'Hong',
      'Jada',
      'Lamurde',
      'Madagali',
      'Maiha',
      'Mayo Belwa',
      'Michika',
      'Mubi North',
      'Mubi South',
      'Numan',
      'Shelleng',
      'Song',
      'Toungo',
      'Yola North',
      'Yola South',
    ),
    'Akwa Ibom State' => array(
      'Abak',
      'Eastern Obolo',
      'Eket',
      'Esit Eket',
      'Essien Udim',
      'Etim Ekpo',
      'Etinan',
      'Ibeno',
      'Ibesikpo Asutan',
      'Ibiono-Ibom',
      'Ika',
      'Ikono',
      'Ikot Abasi',
      'Ikot Ekpene',
      'Ini',
      'Itu',
      'Mbo',
      'Mkpat-Enin',
      'Nsit-Atai',
      'Nsit-Ibom',
      'Nsit-Ubium',
      'Obot Akara',
      'Okobo',
      'Onna',
      'Oron',
      'Oruk Anam',
      'Udung-Uko',
      'Ukanafun',
      'Uruan',
      'Urue-Offong/Oruko',
      'Uyo',
    ),
    'Anambra State' => array(
      'Aguata',
      'Anambra East',
      'Anambra West',
      'Anaocha',
      'Awka North',
      'Awka South',
      'Ayamelum',
      'Dunukofia',
      'Ekwusigo',
      'Idemili North',
      'Idemili South',
      'Ihiala',
      'Njikoka',
      'Nnewi North',
      'Nnewi South',
      'Ogbaru',
      'Onitsha North',
      'Onitsha South',
      'Orumba North',
      'Orumba South',
      'Oyi',
    ),
    'Bauchi State' => array(
      'Alkaleri',
      'Bauchi',
      'Bogoro',
      'Damban',
      'Darazo',
      'Dass',
      'Gamawa',
      'Ganjuwa',
      'Giade',
      'Itas/Gadau',
      "Jama'are",
      'Katagum',
      'Kirfi',
      'Misau',
      'Ningi',
      'Shira',
      'Tafawa Balewa',
      'Toro',
      'Warji',
      'Zaki',
    ),
    'Bayelsa State' => array(
      'Brass',
      'Ekeremor',
      'Kolokuma/Opokuma',
      'Nembe',
      'Ogbia',
      'Sagbama',
      'Southern Ijaw',
      'Yenagoa',
    ),
    'Benue State' => array(
      'Agatu',
      'Apa',
      'Ado',
      'Buruku',
      'Gboko',
      'Guma',
      'Gwer East',
      'Gwer West',
      'Katsina-Ala',
      'Konshisha',
      'Kwande',
      'Logo',
      'Makurdi',
      'Obi',
      'Ogbadibo',
      'Ohimini',
      'Oju',
      'Okpokwu',
      'Oturkpo',
      'Tarka',
      'Ukum',
      'Ushongo',
      'Vandeikya',
    ),
    'Borno State' => array(
      'Abadam',
      'Askira/Uba',
      'Bama',
      'Bayo',
      'Biu',
      'Chibok',
      'Damboa',
      'Dikwa',
      'Gubio',
      'Guzamala',
      'Gwoza',
      'Hawul',
      'Jere',
      'Kaga',
      'Kala/Balge',
      'Konduga',
      'Kukawa',
      'Kwaya Kusar',
      'Mafa',
      'Magumeri',
      'Maiduguri',
      'Marte',
      'Mobbar',
      'Monguno',
      'Ngala',
      'Nganzai',
      'Shani',
    ),
    'Cross River State' => array(
      'Abi',
      'Akamkpa',
      'Akpabuyo',
      'Bakassi',
      'Bekwarra',
      'Biase',
      'Boki',
      'Calabar Municipal',
      'Calabar South',
      'Etung',
      'Ikom',
      'Obanliku',
      'Obubra',
      'Obudu',
      'Odukpani',
      'Ogoja',
      'Yakuur',
      'Yala',
    ),
    'Delta State' => array(
      'Aniocha North',
      'Aniocha South',
      'Bomadi',
      'Burutu',
      'Ethiope East',
      'Ethiope West',
      'Ika North East',
      'Ika South',
      'Isoko North',
      'Isoko South',
      'Ndokwa East',
      'Ndokwa West',
      'Okpe',
      'Oshimili North',
      'Oshimili South',
      'Patani',
      'Sapele',
      'Udu',
      'Ughelli North',
      'Ughelli South',
      'Ukwuani',
      'Uvwie',
      'Warri North',
      'Warri South',
      'Warri South West',
    ),
    'Ebonyi State' => array(
      'Abakaliki',
      'Afikpo North',
      'Afikpo South (Edda)',
      'Ebonyi',
      'Ezza North',
      'Ezza South',
      'Ikwo',
      'Ishielu',
      'Ivo',
      'Izzi',
      'Ohaozara',
      'Ohaukwu',
      'Onicha',
    ),
    'Edo State' => array(
      'Akoko-Edo',
      'Egor',
      'Esan Central',
      'Esan North-East',
      'Esan South-East',
      'Esan West',
      'Etsako Central',
      'Etsako East',
      'Etsako West',
      'Igueben',
      'Ikpoba Okha',
      'Orhionmwon',
      'Oredo',
      'Ovia North-East',
      'Ovia South-West',
      'Owan East',
      'Owan West',
      'Uhunmwonde',
    ),
    'Ekiti State' => array(
      'Ado Ekiti',
      'Efon',
      'Ekiti East',
      'Ekiti South-West',
      'Ekiti West',
      'Emure',
      'Gbonyin',
      'Ido Osi',
      'Ijero',
      'Ikere',
      'Ikole',
      'Ilejemeje',
      'Irepodun/Ifelodun',
      'Ise/Orun',
      'Moba',
      'Oye',
    ),
    'Enugu State' => array(
      'Aninri',
      'Awgu',
      'Enugu East',
      'Enugu North',
      'Enugu South',
      'Ezeagu',
      'Igbo Etiti',
      'Igbo Eze North',
      'Igbo Eze South',
      'Isi Uzo',
      'Nkanu East',
      'Nkanu West',
      'Nsukka',
      'Oji River',
      'Udenu',
      'Udi',
      'Uzo Uwani',
    ),
    'FCT' => array(
      'Abaji',
      'Bwari',
      'Gwagwalada',
      'Kuje',
      'Kwali',
      'Municipal Area Council',
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
