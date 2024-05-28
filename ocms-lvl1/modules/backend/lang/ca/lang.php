<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'El tipus de camp :type utilitzat és invàlid.',
    'options_method_invalid_model' => 'L\'atribut \':field\' no resol a un model vàlid. Intenta especificar explícitament el mètode d\'opcions per la classe de model :model.',
    'options_method_not_exists' => 'La classe de model :model ha de definir un mètode :method() que retorni opcions pel camp de formulari \':field\'.',
  ],
  'widget' => [
    'not_registered' => 'No s\'ha registrat un widget amb el nom de classe \':name\'',
    'not_bound' => 'No s\'ha vinculat al controlador un widget amb el nom de classe \':name\'',
  ],
  'page' => [
    'untitled' => 'Sense títol',
    'access_denied' => [
      'label' => 'Accés denegat',
      'help' => 'No tens els permisos necessaris per veure aquesta pàgina.',
      'cms_link' => 'Tornar al panell d\'administració',
    ],
    'no_database' => [
      'label' => 'No es troba la base de dades',
      'help' => 'Es requereix una base de dades per accedir al panell d\'administració. Comprova que la base de dades estigui configurada i migrada abans de tornar-ho a intentar.',
      'cms_link' => 'Tornar a la pàgina principal',
    ],
    'invalid_token' => [
      'label' => 'Token de seguretat invàlid',
    ],
  ],
  'partial' => [
    'not_found_name' => 'El parcial \':name\' no s\'ha trobat.',
  ],
  'account' => [
    'signed_in_as' => 'Connectat com :full_name',
    'sign_out' => 'Sortir',
    'login_placeholder' => 'usuari',
    'password_placeholder' => 'contrasenya',
    'enter_email' => 'Introdueix el teu email',
    'email_placeholder' => 'email',
    'apply' => 'Aplicar',
    'cancel' => 'Cancel·lar',
    'delete' => 'Eliminar',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Escriptori',
    'widget_inspector_title' => 'Configuració de widget',
    'widget_inspector_description' => 'Configurar el widget',
    'widget_columns_label' => 'Ample :columns',
    'widget_columns_description' => 'L\'ample del widget, un número entre 1 i 10.',
    'widget_columns_error' => 'Si us plau introdueix l\'ample del widget amb un número entre 1 i 10.',
    'columns' => '{1} columna|[2,Inf] columnes',
    'widget_new_row_label' => 'Forçar nova fila',
    'widget_new_row_description' => 'Posar el widget en una nova fila.',
    'widget_title_label' => 'Títol del widget',
    'widget_title_error' => 'El títol del widget és obligatori.',
    'reset_layout_success' => 'La disposició s\'ha reiniciat',
    'make_default_success' => 'La disposició actual és ara la disposició per defecte.',
    'collapse_all' => 'Contraure tots',
    'expand_all' => 'Expandir tots',
    'status' => [
      'widget_title_default' => 'Estat del sistema',
      'update_available' => '{0} actualitzacions disponibles!|{1} actualització disponible!|[2,Inf] actualitzacions disponibles!',
      'updates_pending' => 'Actualitzacions de software pendents',
      'updates_nil' => 'El software està actualitzat',
      'updates_link' => 'Actualitzar',
      'warnings_pending' => 'Alguns problemes requereixen atenció',
      'warnings_nil' => 'No hi ha avisos per mostrar',
      'warnings_link' => 'Veure',
      'core_build' => 'Versió del sistema',
      'event_log' => 'Registre d\'esdeveniments',
      'request_log' => 'Registre de peticions',
      'app_birthday' => 'En línia des de',
    ],
    'welcome' => [
      'widget_title_default' => 'Benvingut',
      'welcome_back_name' => 'Benvingut de nou a :app, :name.',
      'welcome_to_name' => 'Benvingut a :app, :name.',
      'first_sign_in' => 'Aquest és el primer cop que accedeixes.',
      'last_sign_in' => 'L\'últim cop que vas accedir va ser',
      'view_access_logs' => 'Veure els registres d\'accés',
      'nice_message' => 'Que tinguis un gran dia!',
    ],
  ],
  'user' => [
    'name' => 'Administrador',
    'list_title' => 'Gestionar Administradors',
    'new' => 'Nou Administrador',
    'first_name' => 'Nom',
    'last_name' => 'Cognom',
    'full_name' => 'Nom complet',
    'email' => 'Email',
    'role_field' => 'Rol',
    'role_comment' => 'Els rols defineixen els permisos d\'usuari, que poden ser invalidats a nivell d\'usuari, a la pestanya de permisos.',
    'groups' => 'Grups',
    'groups_comment' => 'Especificar a quins grups pertany aquest compte.',
    'avatar' => 'Avatar',
    'password' => 'Contrasenya',
    'password_confirmation' => 'Confirmar contrasenya',
    'permissions' => 'Permisos',
    'account' => 'Compte',
    'superuser' => 'Super Usuari',
    'superuser_comment' => 'Concedeix a aquest compte accés il·limitat a totes les àrees del sistema. Els superusuaris poden afegir i gestionar altres usuaris.',
    'send_invite' => 'Enviar invitació per email',
    'send_invite_comment' => 'Envia un missatge de benvinguda que conté la informació d\'usuari i contrasenya.',
    'delete_confirm' => 'Eliminar aquest administrador?',
    'return' => 'Tornar a la llista d\'administradors',
    'allow' => 'Permetre',
    'inherit' => 'Heretar',
    'deny' => 'Denegar',
    'activated' => 'Activat',
    'last_login' => 'Últim accés',
    'created_at' => 'Creat el',
    'updated_at' => 'Actualitzat el',
    'group' => [
      'name' => 'Grup',
      'name_field' => 'Nom',
      'name_comment' => 'El nom es mostra a la llista de grups del formulari d\'administrador.',
      'description_field' => 'Descripció',
      'is_new_user_default_field_label' => 'Grup per defecte',
      'is_new_user_default_field_comment' => 'Afegir nous administradors a aquest grup per defecte',
      'code_field' => 'Codi',
      'code_comment' => 'Introdueix un codi únic si vols accedir a l\'objecte de grup amb l\'API.',
      'list_title' => 'Gestionar grups',
      'new' => 'Nou grup',
      'delete_confirm' => 'Eliminar aquest grup d\'administració?',
      'return' => 'Tornar a la llista de grups',
      'users_count' => 'Usuaris',
    ],
    'role' => [
      'name' => 'Rol',
      'name_field' => 'Nom',
      'name_comment' => 'El nom es mostra a la llista de rols del formulari d\'administrador.',
      'description_field' => 'Descripció',
      'code_field' => 'Codi',
      'code_comment' => 'Introdueix un codi únic si vols accedir a l\'objecte de rol amb l\'API.',
      'list_title' => 'Gestionar rols',
      'new' => 'Nou rol',
      'delete_confirm' => 'Eliminar aquest rol d\'administració?',
      'return' => 'Tornar a la llista de rols',
      'users_count' => 'Usuaris',
    ],
    'preferences' => [
      'not_authenticated' => 'No hi ha un usuari autenticat per a qui carregar o guardar les preferències.',
    ],
  ],
  'list' => [
    'default_title' => 'Llista',
    'search_prompt' => 'Cercar...',
    'no_records' => 'No hi ha registres en aquesta vista.',
    'missing_model' => 'El comportament List utilitzat a :class no té un model definit.',
    'missing_column' => 'No hi ha definicions de columna per :columns.',
    'missing_columns' => 'La llista utilitzada a :class no té columnes de llista definides.',
    'missing_definition' => 'El comportament List no té una columna per \':field\'.',
    'missing_parent_definition' => 'El comportament de llista no conté una definició per \':definition\'.',
    'behavior_not_ready' => 'El comportament List no s\'ha inicialitzat, comprova que has cridat makeLists() al controlador.',
    'invalid_column_datetime' => 'El valor de columna \':column\' no és un objecte DateTime, et falta una referència a $dates al model?',
    'pagination' => 'Mostrant registres: :from-:to de :total',
    'first_page' => 'Primera pàgina',
    'last_page' => 'Última pàgina',
    'prev_page' => 'Pàgina anterior',
    'next_page' => 'Pàgina següent',
    'refresh' => 'Refrescar',
    'updating' => 'Actualitzant...',
    'loading' => 'Carregant...',
    'check' => 'Marcar',
    'delete_selected' => 'Eliminar els seleccionats',
    'delete_selected_empty' => 'No hi ha registres seleccionats per eliminar.',
    'delete_selected_confirm' => 'Eliminar els registres seleccionats?',
    'delete_selected_success' => 'Registres eliminats.',
    'column_switch_true' => 'Sí',
    'column_switch_false' => 'No',
  ],
  'fileupload' => [
    'default_prompt' => 'Clica el %s o arrossega un arxiu aquí per pujar',
  ],
  'form' => [
    'create_title' => 'Nou :name',
    'update_title' => 'Editar :name',
    'preview_title' => 'Previsualitzar :name',
    'reset_success' => 'Reinici completat',
    'missing_id' => 'La ID del registre del formulari no s\'ha especificat.',
    'missing_model' => 'El comportament Form utilitzat a :class no té un model definit.',
    'missing_definition' => 'El comportament Form no té un camp per \':field\'.',
    'action_confirm' => 'N\'estàs segur?',
    'create' => 'Crear',
    'create_and_close' => 'Crear i tancar',
    'creating' => 'Creant...',
    'creating_name' => 'Creant :name...',
    'save' => 'Guardar',
    'save_and_close' => 'Guardar i tancar',
    'saving' => 'Guardant...',
    'saving_name' => 'Guardant :name...',
    'delete' => 'Eliminar',
    'deleting' => 'Eliminant...',
    'confirm_delete' => 'Eliminar registre?',
    'confirm_delete_multiple' => 'Eliminar els registres seleccionats?',
    'deleting_name' => 'Eliminant :name...',
    'reset_default' => 'Reiniciar als valors per defecte',
    'resetting' => 'Reiniciant',
    'resetting_name' => 'Reiniciant :name',
    'undefined_tab' => 'Misc',
    'field_off' => 'Off',
    'field_on' => 'On',
    'add' => 'Afegir',
    'apply' => 'Aplicar',
    'cancel' => 'Cancel·lar',
    'close' => 'Tancar',
    'confirm' => 'Confirmar',
    'reload' => 'Recarregar',
    'complete' => 'Completat',
    'ok' => 'OK',
    'or' => 'o',
    'confirm_tab_close' => 'Tancar la pestanya? Els canvis no guardats es perdran.',
    'behavior_not_ready' => 'El comportament Form no s\'ha inicialitzat, comprova que has cridat initForm() al controlador.',
    'preview_no_files_message' => 'No hi ha arxius pujats.',
    'preview_no_media_message' => 'No hi ha medis seleccionats.',
    'preview_no_record_message' => 'No hi ha cap registre seleccionat.',
    'select' => 'Seleccionar',
    'select_all' => 'seleccionar tot',
    'select_none' => 'no selecciona cap',
    'insert_row' => 'Inserir fila',
    'insert_row_below' => 'Inserir fila a sota',
    'delete_row' => 'Eliminar fila',
    'concurrency_file_changed_title' => 'L\'arxiu ha canviat',
    'concurrency_file_changed_description' => 'L\'arxiu que estàs editant ha estat canviat al disc per un altre usuari. Pots o bé recarregar l\'arxiu i perdre els teus canvis, o bé sobreescriure l\'arxiu al disc.',
    'return_to_list' => 'Tornar a la llista',
  ],
  'recordfinder' => [
    'find_record' => 'Trobar registre',
    'cancel' => 'Cancel·lar',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => 'El comportament Relation no té una configuració per \':config\'.',
    'missing_definition' => 'El comportament Relation no té una definició per \':field\'.',
    'missing_model' => 'El comportament Relation utilitzat a :class no té un model definit.',
    'invalid_action_single' => 'Aquesta acció no pot ser realitzada en una relació singular.',
    'invalid_action_multi' => 'Aquesta acció no pot ser realitzada en una relació múltiple.',
    'help' => 'Clica en un element per afegir-lo',
    'add' => 'Afegir',
    'link_selected' => 'Vincular seleccionats',
    'cancel' => 'Cancel·lar',
    'close' => 'Tancar',
    'create' => 'Crear',
    'update' => 'Actualitzar',
    'preview' => 'Previsualitzar',
    'remove_name' => 'Treure :name',
    'delete_name' => 'Eliminar :name',
    'link' => 'Vincular',
    'unlink_name' => 'Desvincular :name',
  ],
  'reorder' => [
    'default_title' => 'Reordenar registres',
    'no_records' => 'No hi ha registres disponibles per reordenar.',
  ],
  'model' => [
    'name' => 'Model',
    'not_found' => 'El model \':class\' amb l\'ID :id no s\'ha trobat.',
    'missing_id' => 'No s\'ha especificat ID per trobar el registre de model.',
    'missing_relation' => 'El model \':class\' no té una definició per \':relation\'.',
    'missing_method' => 'El model \':class\' no té un mètode \':method\'.',
    'invalid_class' => 'El model :model utilitzat a :class no és vàlid, ha d\'heretar la classe \\Model.',
    'mass_assignment_failed' => 'L\'assignació massiva ha fallat per l\'atribut \':attribute\' del model.',
  ],
  'warnings' => [
    'tips' => 'Consells de configuració del sistema',
    'tips_description' => 'Hi ha problemes que has d\'atendre per configurar el sistema correctament.',
    'permissions' => 'El directori :name o un dels seus subdirectoris no pot ser escrit per PHP. Si us plau assigna els permisos corresponents pel servidor web en aquest directori.',
    'extension' => 'L\'extensió :name no està instal·lada. Si us plau instal·la aquesta llibreria i activa l\'extensió.',
    'plugin_missing' => 'El plugin :name és una dependència però no està instal·lat. Si us plau instal·la aquest plugin.',
  ],
  'editor' => [],
  'tooltips' => [],
  'mysettings' => [
    'menu_label' => 'Les meves opcions',
    'menu_description' => 'Les opcions de configuració relacionades amb el teu compte d\'administració',
  ],
  'myaccount' => [],
  'branding' => [
    'accent_color' => 'Color d\'accent',
  ],
  'backend_preferences' => [],
  'access_log' => [],
  'filter' => [
    'all' => 'tots',
    'options_method_not_exists' => 'La classe de model :model ha de definir un mètode :method() que retorni opcions pel filtre \':filter\'.',
    'date_all' => 'tots els períodes',
    'number_all' => 'tots els números',
  ],
  'import_export' => [
    'row' => 'Fila :row',
    'show_ignored_columns' => 'Mostrar columnes ignorades',
    'auto_match_columns' => 'Emparellar columnes automàticament',
    'created' => 'Creat',
    'updated' => 'Actualitzat',
    'skipped' => 'Omesos',
    'warnings' => 'Avisos',
    'errors' => 'Errors',
    'skipped_rows' => 'Files omeses',
    'upload_valid_csv' => 'Si us plau puja un arxiu CSV vàlid.',
    'drop_column_here' => 'Arrossega una columna aquí...',
    'ignore_this_column' => 'Ignora aquesta columna',
    'processing_successful_line1' => 'Procès d\'exportació d\'arxiu completat!',
    'processing_successful_line2' => 'El navegador et redigirirà aviat a la descàrrega de l\'arxiu.',
    'file_not_found_error' => 'Arxiu no trobat',
    'empty_error' => 'No hi ha dades per exportar',
    'empty_import_columns_error' => 'Si us plau indica alguna columna per importar.',
    'match_some_column_error' => 'Si us plau emparella algunes columnes primer.',
    'required_match_column_error' => 'Si us plau indica un emparellament pel camp requerit :label.',
    'empty_export_columns_error' => 'Si us plau indica alguna columna per exportar.',
    'behavior_missing_uselist_error' => 'Has d\'implementar el comportament de controlador ListController amb l\'opció d\'exportació useList activada.',
    'missing_model_class_error' => 'Si us plau especifica la propietat modelClass per :type',
    'missing_column_id_error' => 'Falta l\'identificador de columna',
    'unknown_column_error' => 'Columna desconeguda',
    'encoding_not_supported_error' => 'La codificació de l\'arxiu font no es reconeix. Si us plau selecciona l\'opció de format d\'arxiu personalitzat amb la codificació correcta per importar el teu arxiu.',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Europa Occidental)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Europa Central)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, Europa del Sud)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, Europa del Nord)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Ciríl·lic)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Aràbic)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Grec)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, Hebreu)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turc)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Regió Bàltica)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celta)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Europa Occidental - revisió amb signe de l\'euro)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Puja i gestiona continguts multimèdia - imatges, vídeos, sons, documents',
  ],
  'mediafinder' => [
    'label' => 'Cercador multimèdia',
    'default_prompt' => 'Clica el botó %s per cercar un element multimèdia',
  ],
  'media' => [
    'menu_label' => 'Mèdia',
    'upload' => 'Pujar',
    'move' => 'Moure',
    'delete' => 'Eliminar',
    'add_folder' => 'Afegir carpeta',
    'search' => 'Cercar',
    'display' => 'Mostrar',
    'filter_everything' => 'Tot',
    'filter_images' => 'Imatges',
    'filter_video' => 'Vídeo',
    'filter_audio' => 'Àudio',
    'filter_documents' => 'Documents',
    'library' => 'Biblioteca',
    'size' => 'Mida',
    'title' => 'Títol',
    'last_modified' => 'Modificat per últim cop',
    'public_url' => 'URL',
    'click_here' => 'Clica aquí',
    'thumbnail_error' => 'Error generant miniatura.',
    'return_to_parent' => 'Tornar a la carpeta pare',
    'return_to_parent_label' => 'Ves amunt ..',
    'nothing_selected' => 'No hi ha res seleccionat.',
    'multiple_selected' => 'Múltiples elements seleccionats.',
    'uploading_file_num' => 'Pujant :number arxiu(s)...',
    'uploading_complete' => 'Pujada completa',
    'uploading_error' => 'Pujada fallida',
    'type_blocked' => 'Aquest tipus d\'arxiu està bloquejat per raons de seguretat.',
    'order_by' => 'Ordenar per',
    'direction' => 'Direcció',
    'direction_asc' => 'Ascendent',
    'direction_desc' => 'Descendent',
    'folder' => 'Carpeta',
    'no_files_found' => 'No s\'han trobat arxius amb aquests paràmetres de cerca.',
    'delete_empty' => 'Si us plau selecciona elements per eliminar.',
    'delete_confirm' => 'Eliminar els elements seleccionats?',
    'error_renaming_file' => 'Error reanomenant l\'element.',
    'new_folder_title' => 'Nova carpeta',
    'folder_name' => 'Nom de carpeta',
    'error_creating_folder' => 'Error creant carpeta',
    'folder_or_file_exist' => 'Ja existeix una carpeta o arxiu amb aquest nom',
    'move_empty' => 'Si us plau selecciona elements per moure.',
    'move_popup_title' => 'Moure arxius o carpetes',
    'move_destination' => 'Carpeta de destí',
    'please_select_move_dest' => 'Si us plau selecciona una carpeta de destí.',
    'move_dest_src_match' => 'Si us plau selecciona una altra carpeta de destí.',
    'empty_library' => 'Això sembla una mica buit. Puja arxius o crea carpetes per començar.',
    'insert' => 'Insertar',
    'crop_and_insert' => 'Retallar i inserir',
    'select_single_image' => 'Si us plau selecciona una única imatge.',
    'selection_not_image' => 'L\'element seleccionat no és una imatge.',
    'restore' => 'Desfès tots els canvis',
    'resize' => 'Redimensionar...',
    'selection_mode_normal' => 'Normal',
    'selection_mode_fixed_ratio' => 'Ràtio fixa',
    'selection_mode_fixed_size' => 'Mida fixa',
    'height' => 'Alçada',
    'width' => 'Amplada',
    'selection_mode' => 'Selecciona mode',
    'resize_image' => 'Redimensionar imatge',
    'image_size' => 'Mida d\'imatge:',
    'selected_size' => 'Seleccionat:',
  ],
];
