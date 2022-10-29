<?php return [
  'cms_object' => [
    'invalid_file' => 'Hatalı dosya adı: :name. Dosya isimleri sadece alfanümerik semboller, alt çizgiler, tire ve nokta içerebilir. Bazı doğru dosya adı örnekleri: sayfa.htm, sayfa, altdizin/sayfa',
    'invalid_property' => '":name" özelliği ayarlanamadı',
    'file_already_exists' => '":name" isimli dosya mevcut.',
    'error_saving' => '":name" kaydedilirken hatayla oluştu.',
    'error_creating_directory' => ':name klasörü oluşturulurken hata oluştu',
    'invalid_file_extension' => 'Hatalı dosya uzantısı: :invalid. İzin verilen uzantılar: :allowed.',
    'error_deleting' => '":name" şablon dosyası silinirken hatayla karşılaşıldı.',
    'delete_success' => ':count şablon başarıyla silindi.',
    'file_name_required' => 'Dosya adı alanı gereklidir.',
    'safe_mode_enabled' => 'Güvenli mod şuan aktif.',
  ],
  'dashboard' => [
    'active_theme' => [
      'widget_title_default' => 'Website',
      'online' => 'yayında',
      'maintenance' => 'bakım modunda',
      'manage_themes' => 'Temaları yönet',
      'customize_theme' => 'Tema özelleştir',
    ],
  ],
  'theme' => [
    'active' => [
      'not_set' => 'Aktif tema belirtilmedi.',
      'not_found' => 'Aktif tema bulunamadı.',
    ],
    'edit' => [
      'not_set' => 'Düzenlenecek tema belirtilmedi.',
      'not_found' => 'Düzenlenecek tema bulunamadı.',
      'not_match' => 'Ulaşmaya çalıştığınız nesne düzenlenecek temaya ait değil. Lütfen sayfayı yenileyin.',
    ],
  ],
  'maintenance' => [],
  'page' => [
    'not_found_name' => '\':name\' sayfası bulunamadı',
    'not_found' => [
      'label' => 'Sayfa bulunamadı',
      'help' => 'İstenilen sayfa bulunamadı.',
    ],
    'custom_error' => [
      'label' => 'Sayfa hatası',
      'help' => 'Üzgünüz, bir şeyler ters gitti ve sayfa görüntülenemiyor.',
    ],
    'menu_label' => 'Sayfalar',
    'unsaved_label' => 'Kaydedilmemiş sayfa(lar)',
    'no_list_records' => 'Hiç sayfa yok.',
    'new' => 'Sayfa oluştur',
    'invalid_url' => 'Hatalı URL formatı. URL eğik çizgi ile başlamalı ve sayı, Latin harfleri ve aşağıdaki sembolleri içerebilir: ._-[]:?|/+*^$',
    'delete_confirm_multiple' => 'Seçili sayfaları silmek istediğinize emin misiniz?',
    'delete_confirm_single' => 'Bu sayfayı silmek istediğinize emin misiniz?',
    'no_layout' => '-- şablon yok --',
    'cms_page' => 'CMS sayfa',
    'title' => 'Sayfa başlığı',
    'url' => 'Sayfa URL',
    'file_name' => 'Sayfa dosyası adı',
  ],
  'layout' => [
    'not_found_name' => '\':name\' isimli şablon bulunamadı',
    'menu_label' => 'Şablonlar',
    'unsaved_label' => 'Kaydedilmemiş şablon(lar)',
    'no_list_records' => 'Şablon bulunamadı',
    'new' => 'Şablon oluştur',
    'delete_confirm_multiple' => 'Seçili şablonları silmek istediğinize emin misiniz?',
    'delete_confirm_single' => 'Seçili şablonu silmek istediğinize emin misiniz?',
  ],
  'partial' => [
    'not_found_name' => '\':name\' bölümü bulunamadı.',
    'invalid_name' => 'Hatalı bölüm adı: :name.',
    'menu_label' => 'Bölümler',
    'unsaved_label' => 'Kaydedilmemiş bölüm(ler)',
    'no_list_records' => 'Bölüm bulunamadı.',
    'delete_confirm_multiple' => 'Seçili bölümleri silmek istediğinize emin misiniz?',
    'delete_confirm_single' => 'Bu bölümü silmek istediğinize emin misiniz?',
    'new' => 'Bölüm Oluştur',
  ],
  'content' => [
    'not_found_name' => '\':name\' isminde içerik dosyası bulunamadı.',
    'menu_label' => 'İçerik',
    'unsaved_label' => 'Kaydedilmemiş içerik',
    'no_list_records' => 'İçerik dosyası bulunamadı.',
    'delete_confirm_multiple' => 'Seçili içerik dosyaları veya klasörlerini silmek istediğinize emin misiniz?',
    'delete_confirm_single' => 'Bu içerik dosyasını silmek istediğinize emin misiniz?',
    'new' => 'Yeni İçerik',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Hatalı AJAX işleyici adı: :name.',
    'not_found' => '\':name\' isimli AJAX işleyici bulunamadı.',
  ],
  'cms' => [
    'menu_label' => 'Tasarım Ayarları',
  ],
  'sidebar' => [
    'add' => 'Ekle',
    'search' => 'Ara...',
  ],
  'editor' => [
    'settings' => 'Ayarlar',
    'title' => 'Başlık',
    'new_title' => 'Yeni sayfa başlığı',
    'url' => 'URL',
    'filename' => 'Dosya Adı',
    'layout' => 'Düzen',
    'description' => 'Tanım',
    'preview' => 'Önizleme',
    'meta' => 'Meta',
    'meta_title' => 'Meta Başlık',
    'meta_description' => 'Meta Tanım',
    'markup' => 'Biçimlendirme',
    'code' => 'Kod',
    'content' => 'İçerik',
    'hidden' => 'Gizli',
    'hidden_comment' => 'Gizli sayfalara yalnızca Yönetim Paneline giriş yapmış kullanıcılar erişilebilir.',
    'enter_fullscreen' => 'Tam Ekran moduna geç',
    'exit_fullscreen' => 'Tam Ekran modundan çık',
    'open_searchbox' => 'Arama kutusunu aç',
    'close_searchbox' => 'Arama kutusunu kapat',
    'open_replacebox' => 'Düzenleme kutusunu aç',
    'close_replacebox' => 'Düzenleme kutusunu kapat',
  ],
  'asset' => [
    'menu_label' => 'Dosyalar',
    'unsaved_label' => 'Kaydedilmemiş dosya(lar)',
    'drop_down_add_title' => 'Ekle...',
    'drop_down_operation_title' => 'İşlemler...',
    'upload_files' => 'Dosya(lar) yükle',
    'create_file' => 'Dosya oluştur',
    'create_directory' => 'Klasör oluştur',
    'directory_popup_title' => 'Yeni klasör',
    'directory_name' => 'Klasör ismi',
    'rename' => 'Yeniden isimlendir',
    'delete' => 'Sil',
    'move' => 'Taşı',
    'select' => 'Seç',
    'new' => 'Yeni dosya',
    'rename_popup_title' => 'Yeniden isimlendir',
    'rename_new_name' => 'Yeni isim',
    'invalid_path' => 'Yol sadece sayı, Latin harfleri, boşluk ve şu sembolleri içerebilir: ._-/',
    'error_deleting_file' => ':name dosyası silinirken hatayla karşılaşıldı.',
    'error_deleting_dir_not_empty' => ':name klasörü silinemedi. Klasör boş değil.',
    'error_deleting_dir' => ':name dosyası silinirken hatayla karşılaşıldı.',
    'invalid_name' => 'İsim sadece sayı, Latin harfleri, boşluk ve şu sembolleri içerebilir: ._-',
    'original_not_found' => 'Orjinal dosya veya dizin bulunamadı',
    'already_exists' => 'Bu isimde dosya veya dizin zaten var',
    'error_renaming' => 'Dosya veya dizin ismi düzenlenemedi',
    'name_cant_be_empty' => 'İsim alanı boş bırakılamaz.',
    'too_large' => 'Yüklenen dosya çok büyük. İzin verilen maksimum boyut :max_size',
    'type_not_allowed' => 'İzin verilen dosya tipleri: :allowed_types',
    'file_not_valid' => 'Dosya geçerli değil',
    'error_uploading_file' => '":name" yüklenirken hatayla karşılaşıldı: :error',
    'move_please_select' => 'lütfen seçiniz',
    'move_destination' => 'Hedef klasör',
    'move_popup_title' => 'Assets\'i taşı',
    'move_button' => 'Taşı',
    'selected_files_not_found' => 'Seçilen dosyalar bulunamadı.',
    'select_destination_dir' => 'Lütfen hedef klasör seçiniz',
    'destination_not_found' => 'Hedef klasör bulunamadı',
    'error_moving_file' => ':file dosyası taşınırken hatayla karşılaşıldı',
    'error_moving_directory' => ':dir klasörü taşınırken hatayla karşılaşıldı',
    'error_deleting_directory' => ':dir klasörü silinirken hatayla karşılaşıldı',
    'no_list_records' => 'Dosya bulunamadı',
    'delete_confirm' => 'Seçilen dosyalar veya dizinler silinsin mi?',
    'path' => 'Yol',
  ],
  'component' => [
    'menu_label' => 'Bileşenler',
    'unnamed' => 'İsimsiz',
    'no_description' => 'Açıklama girilmedi.',
    'alias' => 'Takma ad',
    'alias_description' => 'Bu bileşen için benzersiz bir isim. Sayfa veya şablonda kullanırken bu isim gerekecektir.',
    'validation_message' => 'Bileşen isimleri gerkelidir ve sadece Latin semboller, sayılar, ve alt çizgi içerebilir. Bileşen ismi ayrıca Latin harfle başlamalı.',
    'invalid_request' => 'Şablonda hatalı bileşen verisi olduğu için kaydedilemedi.',
    'no_records' => 'Bileşen bulunamadı.',
    'not_found' => '\':name\' isimli bileşen bulunamadı.',
    'method_not_found' => '\':name\' isimli bileşen \':method\'unu içermiyor.',
  ],
  'template' => [
    'invalid_type' => 'Hatalı şablon tipi.',
    'not_found' => 'İstenilen şablon bulunamadı.',
    'saved' => 'Şablon başarıyla kaydedildi.',
    'no_list_records' => 'Kayıt bulunamadı',
    'delete_confirm' => 'Seçilen şablonlar silinsin mi?',
    'order_by' => 'Sırala',
  ],
  'permissions' => [
    'name' => 'CMS Sistemi',
    'manage_content' => 'İçerikleri düzenleyebilsin',
    'manage_assets' => 'Dosyaları düzenleyebilsin',
    'manage_pages' => 'Sayfaları düzenleyebilsin',
    'manage_layouts' => 'Şablonları düzenleyebilsin',
    'manage_partials' => 'Parça Kodları düzenleyebilsin',
    'manage_themes' => 'Temaları düzenleyebilsin',
    'manage_theme_options' => 'Aktif tema için özelleştirme seçeneklerini yapılandırın',
  ],
  'theme_log' => [
    'hint' => 'Bu kayıtlar, backend yöneticileri tarafından temada yapılan değişiklikleri görüntüler.',
    'menu_label' => 'Tema log',
    'menu_description' => 'Aktif temada yapılan değişiklikleri görüntüleyin.',
    'empty_link' => 'Tema loglarını temizle',
    'empty_loading' => 'Tema logları temizleniyor...',
    'empty_success' => 'Tema log temizlendi',
    'return_link' => 'Tema loglarına dön',
    'id' => 'ID',
    'id_label' => 'Log ID',
    'created_at' => 'Tarih ve Saat',
    'user' => 'Kişi',
    'type' => 'Tipi',
    'type_create' => 'Oluştur',
    'type_update' => 'Güncelle',
    'type_delete' => 'Sil',
    'theme_name' => 'Tema',
    'theme_code' => 'Tema kodu',
    'old_template' => 'Şablon (Eski)',
    'new_template' => 'Şablon (Yeni)',
    'template' => 'Şablon',
    'diff' => 'Değişiklikler',
    'old_value' => 'Eski değer',
    'new_value' => 'Yeni değer',
    'preview_title' => 'Şablon değişiklikleri',
    'template_updated' => 'Şablon güncellendi',
    'template_created' => 'Şablon oluşturuldu',
    'template_deleted' => 'Şablon silindi',
  ],
];