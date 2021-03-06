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
      'Akko',
      'Balanga',
      'Billiri',
      'Dukku',
      'Funakaye',
      'Gombe',
      'Kaltungo',
      'Kwami',
      'Nafada',
      'Shongom',
      'Yamaltu/Deba',
    ),
    'Imo State' => array(
      'Aboh Mbaise',
      'Ahiazu Mbaise',
      'Ehime Mbano',
      'Ezinihitte',
      'Ideato North',
      'Ideato South',
      'Ihitte/Uboma',
      'Ikeduru',
      'Isiala Mbano',
      'Isu',
      'Mbaitoli',
      'Ngor Okpala',
      'Njaba',
      'Nkwerre',
      'Nwangele',
      'Obowo',
      'Oguta',
      'Ohaji/Egbema',
      'Okigwe',
      'Orlu',
      'Orsu',
      'Oru East',
      'Oru West',
      'Owerri Municipal',
      'Owerri North',
      'Owerri West',
      'Unuimo',
    ),
    'Jigawa State' => array(
      'Auyo',
      'Babura',
      'Biriniwa',
      'Birnin Kudu',
      'Buji',
      'Dutse',
      'Gagarawa',
      'Garki',
      'Gumel',
      'Guri',
      'Gwaram',
      'Gwiwa',
      'Hadejia',
      'Jahun',
      'Kafin Hausa',
      'Kazaure',
      'Kiri Kasama',
      'Kiyawa',
      'Kaugama',
      'Maigatari',
      'Malam Madori',
      'Miga',
      'Ringim',
      'Roni',
      'Sule Tankarkar',
      'Taura',
      'Yankwashi',
    ),
    'Kaduna State' => array(
      'Birnin Gwari',
      'Chikun',
      'Giwa',
      'Igabi',
      'Ikara',
      'Jaba',
      "Jema'a",
      'Kachia',
      'Kaduna North',
      'Kaduna South',
      'Kagarko',
      'Kajuru',
      'Kaura',
      'Kauru',
      'Kubau',
      'Kudan',
      'Lere',
      'Makarfi',
      'Sabon Gari',
      'Sanga',
      'Soba',
      'Zangon Kataf',
      'Zaria',
    ),
    'Kano State' => array(
      'Ajingi',
      'Albasu',
      'Bagwai',
      'Bebeji',
      'Bichi',
      'Bunkure',
      'Dala',
      'Dambatta',
      'Dawakin Kudu',
      'Dawakin Tofa',
      'Doguwa',
      'Fagge',
      'Gabasawa',
      'Garko',
      'Garun Mallam',
      'Gaya',
      'Gezawa',
      'Gwale',
      'Gwarzo',
      'Kabo',
      'Kano Municipal',
      'Karaye',
      'Kibiya',
      'Kiru',
      'Kumbotso',
      'Kunchi',
      'Kura',
      'Madobi',
      'Makoda',
      'Minjibir',
      'Nasarawa',
      'Rano',
      'Rimin Gado',
      'Rogo',
      'Shanono',
      'Sumaila',
      'Takai',
      'Tarauni',
      'Tofa',
      'Tsanyawa',
      'Tudun Wada',
      'Ungogo',
      'Warawa',
      'Wudil',
    ),
    'Katsina State' => array(
      'Bakori',
      'Batagarawa',
      'Batsari',
      'Baure',
      'Bindawa',
      'Charanchi',
      'Dandume',
      'Danja',
      'Dan Musa',
      'Daura',
      'Dutsi',
      'Dutsin Ma',
      'Faskari',
      'Funtua',
      'Ingawa',
      'Jibia',
      'Kafur',
      'Kaita',
      'Kankara',
      'Kankia',
      'Katsina',
      'Kurfi',
      'Kusada',
      "Mai'Adua",
      'Malumfashi',
      'Mani',
      'Mashi',
      'Matazu',
      'Musawa',
      'Rimi',
      'Sabuwa',
      'Safana',
      'Sandamu',
      'Zango',
    ),
    'Kebbi State' => array(
      'Aleiro',
      'Arewa Dandi',
      'Argungu',
      'Augie',
      'Bagudo',
      'Birnin Kebbi',
      'Bunza',
      'Dandi',
      'Fakai',
      'Gwandu',
      'Jega',
      'Kalgo',
      'Koko/Besse',
      'Maiyama',
      'Ngaski',
      'Sakaba',
      'Shanga',
      'Suru',
      'Wasagu/Danko',
      'Yauri',
      'Zuru',
    ),
    'Kogi State' => array(
      'Adavi',
      'Ajaokuta',
      'Ankpa',
      'Bassa',
      'Dekina',
      'Ibaji',
      'Idah',
      'Igalamela Odolu',
      'Ijumu',
      'Kabba/Bunu',
      'Kogi',
      'Lokoja',
      'Mopa Muro',
      'Ofu',
      'Ogori/Magongo',
      'Okehi',
      'Okene',
      'Olamaboro',
      'Omala',
      'Yagba East',
      'Yagba West',
    ),
    'Kwara State' => array(
      'Asa',
      'Baruten',
      'Edu',
      'Ekiti',
      'Ifelodun',
      'Ilorin East',
      'Ilorin South',
      'Ilorin West',
      'Irepodun',
      'Isin',
      'Kaiama',
      'Moro',
      'Offa',
      'Oke Ero',
      'Oyun',
      'Pategi',
    ),
    'Lagos State' => array(
      'Agege',
      'Ajeromi-Ifelodun',
      'Alimosho',
      'Amuwo-Odofin',
      'Apapa',
      'Badagry',
      'Epe',
      'Eti Osa',
      'Ibeju-Lekki',
      'Ifako-Ijaiye',
      'Ikeja',
      'Ikorodu',
      'Kosofe',
      'Lagos Island',
      'Lagos Mainland',
      'Mushin',
      'Ojo',
      'Oshodi-Isolo',
      'Shomolu',
      'Surulere',
    ),
    'Nasarawa State' => array(
      'Akwanga',
      'Awe',
      'Doma',
      'Karu',
      'Keana',
      'Keffi',
      'Kokona',
      'Lafia',
      'Nasarawa',
      'Nasarawa Egon',
      'Obi',
      'Toto',
      'Wamba',
    ),
    'Niger State' => array(
      'Agaie',
      'Agwara',
      'Bida',
      'Borgu',
      'Bosso',
      'Chanchaga',
      'Edati',
      'Gbako',
      'Gurara',
      'Katcha',
      'Kontagora',
      'Lapai',
      'Lavun',
      'Magama',
      'Mariga',
      'Mashegu',
      'Mokwa',
      'Moya',
      'Paikoro',
      'Rafi',
      'Rijau',
      'Shiroro',
      'Suleja',
      'Tafa',
      'Wushishi',
    ),
    'Ogun State' => array(
      'Abeokuta North',
      'Abeokuta South',
      'Ado-Odo/Ota',
      'Yewa North',
      'Yewa South',
      'Ewekoro',
      'Ifo',
      'Ijebu East',
      'Ijebu North',
      'Ijebu North East',
      'Ijebu Ode',
      'Ikenne',
      'Imeko Afon',
      'Ipokia',
      'Obafemi Owode',
      'Odeda',
      'Odogbolu',
      'Ogun Waterside',
      'Remo North',
      'Shagamu',
    ),
    'Ondo State' => array(
      'Akoko North-East',
      'Akoko North-West',
      'Akoko South-West',
      'Akoko South-East',
      'Akure North',
      'Akure South',
      'Ese Odo',
      'Idanre',
      'Ifedore',
      'Ilaje',
      'Ile Oluji/Okeigbo',
      'Irele',
      'Odigbo',
      'Okitipupa',
      'Ondo East',
      'Ondo West',
      'Ose',
      'Owo',
    ),
    'Osun State' => array(
      'Atakunmosa East',
      'Atakunmosa West',
      'Aiyedaade',
      'Aiyedire',
      'Boluwaduro',
      'Boripe',
      'Ede North',
      'Ede South',
      'Ife Central',
      'Ife East',
      'Ife North',
      'Ife South',
      'Egbedore',
      'Ejigbo',
      'Ifedayo',
      'Ifelodun',
      'Ila',
      'Ilesa East',
      'Ilesa West',
      'Irepodun',
      'Irewole',
      'Isokan',
      'Iwo',
      'Obokun',
      'Odo Otin',
      'Ola Oluwa',
      'Olorunda',
      'Oriade',
      'Orolu',
      'Osogbo',
    ),
    'Oyo State' => array(
      'Afijio',
      'Akinyele',
      'Atiba',
      'Atisbo',
      'Egbeda',
      'Ibadan North',
      'Ibadan North-East',
      'Ibadan North-West',
      'Ibadan South-East',
      'Ibadan South-West',
      'Ibarapa Central',
      'Ibarapa East',
      'Ibarapa North',
      'Ido',
      'Irepo',
      'Iseyin',
      'Itesiwaju',
      'Iwajowa',
      'Kajola',
      'Lagelu',
      'Ogbomosho North',
      'Ogbomosho South',
      'Ogo Oluwa',
      'Olorunsogo',
      'Oluyole',
      'Ona Ara',
      'Orelope',
      'Ori Ire',
      'Oyo',
      'Oyo East',
      'Saki East',
      'Saki West',
      'Surulere',
    ),
    'Plateau State' => array(
      'Bokkos',
      'Barkin Ladi',
      'Bassa',
      'Jos East',
      'Jos North',
      'Jos South',
      'Kanam',
      'Kanke',
      'Langtang South',
      'Langtang North',
      'Mangu',
      'Mikang',
      'Pankshin',
      "Qua'an Pan",
      'Riyom',
      'Shendam',
      'Wase',
    ),
    'Rivers State' => array(
      'Abua/Odual',
      'Ahoada East',
      'Ahoada West',
      'Akuku-Toru',
      'Andoni',
      'Asari-Toru',
      'Bonny',
      'Degema',
      'Eleme',
      'Emuoha',
      'Etche',
      'Gokana',
      'Ikwerre',
      'Khana',
      'Obio/Akpor',
      'Ogba/Egbema/Ndoni',
      'Ogu/Bolo',
      'Okrika',
      'Omuma',
      'Opobo/Nkoro',
      'Oyigbo',
      'Port Harcourt',
      'Tai',
    ),
    'Sokoto State' => array(
      'Binji',
      'Bodinga',
      'Dange Shuni',
      'Gada',
      'Goronyo',
      'Gudu',
      'Gwadabawa',
      'Illela',
      'Isa',
      'Kebbe',
      'Kware',
      'Rabah',
      'Sabon Birni',
      'Shagari',
      'Silame',
      'Sokoto North',
      'Sokoto South',
      'Tambuwal',
      'Tangaza',
      'Tureta',
      'Wamako',
      'Wurno',
      'Yabo',
    ),
    'Taraba State' => array(
      'Ardo Kola',
      'Bali',
      'Donga',
      'Gashaka',
      'Gassol',
      'Ibi',
      'Jalingo',
      'Karim Lamido',
      'Kumi',
      'Lau',
      'Sardauna',
      'Takum',
      'Ussa',
      'Wukari',
      'Yorro',
      'Zing',
    ),
    'Yobe State' => array(
      'Bade',
      'Bursari',
      'Damaturu',
      'Fika',
      'Fune',
      'Geidam',
      'Gujba',
      'Gulani',
      'Jakusko',
      'Karasuwa',
      'Machina',
      'Nangere',
      'Nguru',
      'Potiskum',
      'Tarmuwa',
      'Yunusari',
      'Yusufari',
    ),
    'Zamfara State' => array(
      'Anka',
      'Bakura',
      'Birnin Magaji/Kiyaw',
      'Bukkuyum',
      'Bungudu',
      'Gummi',
      'Gusau',
      'Kaura Namoda',
      'Maradun',
      'Maru',
      'Shinkafi',
      'Talata Mafara',
      'Chafe',
      'Zurmi',
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
