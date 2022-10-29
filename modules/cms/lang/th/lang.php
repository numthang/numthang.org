<?php return [
  'cms_object' => [
    'invalid_file' => 'ชื่อไฟล์ไม่ถูกต้อง: :name ชื่อไฟล์สามารถใส่ ตัวอักษรภาษาอังกฤษ ตัวเลข และสัญลักษณ์ _-. ตัวอย่างชื่อไฟล์ที่ถูกต้อง: page.htm, page, subdirectory/page',
    'invalid_property' => 'คุณสมบัติ \':name\' ไม่สามารถตั้งค่าได้',
    'file_already_exists' => 'ไฟล์ \':name\' มีอยู่แล้ว',
    'error_saving' => 'การบันทึกไฟล์ผิดพลาด \':name\' กรุณาตรวจสอบสิทธิ์การเขียนไฟล์',
    'error_creating_directory' => 'การสร้างโฟลเดอร์ผิดพลาด :name. กรุณาตรวจสอบสิทธิ์การเขียนไฟล์',
    'invalid_file_extension' => 'นามสกุลไฟล์ไม่ถูกต้อง: :invalid นามสกุลที่อนุญาตให้ใช้ได้มีดังนี้: :allowed',
    'error_deleting' => 'การลบไฟล์แม่แบบผิดพลาด \':name\' กรุณาตรวจสอบสิทธิ์การเขียนไฟล์',
    'delete_success' => 'ลบแม่แบบจำนวน: :count แม่แบบ',
    'file_name_required' => 'ต้องใส่ช่องชื่อไฟล์',
    'safe_mode_enabled' => 'โหมดความปลอดภัยกำลังถูกใช้งาน',
  ],
  'dashboard' => [
    'active_theme' => [
      'widget_title_default' => 'เว็บไซต์',
      'online' => 'ออนไลน์',
      'maintenance' => 'กำลังปรับปรุง',
      'manage_themes' => 'จัดการธีม',
      'customize_theme' => 'ปรับแก้ธีม',
    ],
  ],
  'theme' => [
    'active' => [
      'not_set' => 'ยังไม่ได้เปิดใช้งานธีม',
      'not_found' => 'ไม่พบธีมที่เปิดใช้งาน',
    ],
    'edit' => [
      'not_set' => 'ธีมที่แก้ไขไม่สามารถตั้งค่าได้',
      'not_found' => 'หาธีมที่แก้ไขไม่พบ',
      'not_match' => 'สิ่งที่คุณกำลังพยายามเข้าถึงไม่อยู่ในธีมที่กำลังแก้ไขอยู่ กรุณารีโหลดหน้าเว็บ',
    ],
  ],
  'maintenance' => [],
  'page' => [
    'not_found_name' => 'หาหน้าเว็บ \':name\' ไม่พบ',
    'not_found' => [
      'label' => 'ไม่พบหน้าเว็บ',
      'help' => 'หาหน้าเว็บที่ร้องขอไม่พบ',
    ],
    'custom_error' => [
      'label' => 'หน้าเว็บผิดพลาด',
      'help' => 'ขอโทษครับ, มีบางอย่างผิดพลาดและไม่สามารถแสดงหน้าเว็บได้',
    ],
    'menu_label' => 'หน้าเว็บ',
    'unsaved_label' => 'หน้าเว็บที่ยังไม่บันทึก',
    'no_list_records' => 'ไม่พบหน้าเว็บ',
    'new' => 'หน้าใหม่',
    'invalid_url' => 'รูปแบบ URL ไม่ถูกต้อง, URL ควรเริ่มต้นด้วยเครื่องหมาย / และสามารถมีตัวเลข, ตัวอักษรภาษาอังกฤษและเครื่องหมาย: ._-[]:?|/+*^$',
    'delete_confirm_multiple' => 'ลบหน้าที่ถูกเลือกไว้?',
    'delete_confirm_single' => 'ลบหน้านี้?',
    'no_layout' => '-- ไม่มีโครงร่าง --',
    'cms_page' => 'หน้าเว็บ CMS',
    'title' => 'หัวเรื่องหน้าเว็บ',
    'url' => 'URL หน้าเว็บ',
    'file_name' => 'ชื่อไฟล์หน้าเว็บ',
  ],
  'layout' => [
    'not_found_name' => 'หาโครงร่าง \':name\' ไม่พบ',
    'menu_label' => 'โครงร่าง (Layout)',
    'unsaved_label' => 'โครงร่างที่ยังไม่บันทึก',
    'no_list_records' => 'ไม่พบโครงร่าง',
    'new' => 'โครงร่างใหม่',
    'delete_confirm_multiple' => 'ลบโครงร่างที่เลือกไว้?',
    'delete_confirm_single' => 'ลบโครงร่างนี้?',
  ],
  'partial' => [
    'not_found_name' => 'ไม่พบส่วนย่อย \':name\'',
    'invalid_name' => 'ส่วนย่อยชื่อ: :name ไม่ถูกต้อง',
    'menu_label' => 'ส่วนย่อย',
    'unsaved_label' => 'ส่วนย่อยที่ยังไม่บันทึก',
    'no_list_records' => 'ไม่พบส่วนย่อย',
    'delete_confirm_multiple' => 'ลบส่วนย่อยที่เลือกไว้?',
    'delete_confirm_single' => 'ลบส่วนย่อยนี้?',
    'new' => 'ส่วนย่อยใหม่',
  ],
  'content' => [
    'not_found_name' => 'ไม่พบไฟล์เนื้อหา \':name\'',
    'menu_label' => 'เนื้อหา',
    'unsaved_label' => 'เนื้อหาที่ยังไม่ได้บันทึก',
    'no_list_records' => 'หาไฟล์เนื้อหาไม่พบ',
    'delete_confirm_multiple' => 'ลบไฟล์เนื้อหาหรือโฟลเดอร์ที่เลือกไว้?',
    'delete_confirm_single' => 'ลบไฟล์เนื้อหานี้?',
    'new' => 'ไฟล์เนื้อหาใหม่',
  ],
  'ajax_handler' => [
    'invalid_name' => 'ชื่อผู้จัดการ AJAX: :name ไม่ถูกต้อง',
    'not_found' => 'หาผู้จัดการ AJAX \':name\' ไม่พบ',
  ],
  'cms' => [
    'menu_label' => 'CMS',
  ],
  'sidebar' => [
    'add' => 'เพิ่ม',
    'search' => 'ค้นหา...',
  ],
  'editor' => [
    'settings' => 'การตั้งค่า',
    'title' => 'หัวเรื่อง',
    'new_title' => 'หัวเรื่องหน้าใหม่',
    'url' => 'URL',
    'filename' => 'ชื่อไฟล์',
    'layout' => 'โครงร่าง',
    'description' => 'รายละเอียด',
    'preview' => 'ดูตัวอย่าง',
    'meta' => 'ข้อมูลย่อย',
    'meta_title' => 'หัวเรื่อง',
    'meta_description' => 'รายละเอียด',
    'markup' => 'Markup',
    'code' => 'Code',
    'content' => 'เนื้อหา',
    'hidden' => 'ซ่อน',
    'hidden_comment' => 'เพจที่ถูกซ่อนสามารถเข้าถึงได้โดยผู้ใช้หลังบ้านที่ล็อกอินเท่านั้น',
    'enter_fullscreen' => 'เข้าสู่โหมดเต็มหน้าจอ',
    'exit_fullscreen' => 'ออกโหมดเต็มหน้าจอ',
    'open_searchbox' => 'เปิดกล่องค้นหา',
    'close_searchbox' => 'ปิดกล่องค้นหา',
    'open_replacebox' => 'เปลี่ยนกล่องแทนที่',
    'close_replacebox' => 'ปิดกล่องแทนที่',
    'reset' => 'ตั้งค่าเริ่มต้น',
    'reset_confirm' => 'คุณแน่ใจว่าต้องการตั้งค่าเริ่มต้นไฟล์นี้ตามข้อมูลที่อยู่ในระบบไฟล์? ไฟล์นี้จะถูกเขียนทับด้วยไฟล์ที่อยู่ในระบบไฟล์',
    'resetting' => 'กำลังตั้งค่าเริ่มต้น',
  ],
  'asset' => [
    'menu_label' => 'สินทรัพย์',
    'unsaved_label' => 'สินทรัพย์ที่ยังไม่ได้บันทึก',
    'drop_down_add_title' => 'เพิ่ม...',
    'drop_down_operation_title' => 'การทำงาน...',
    'upload_files' => 'อัพโหลดไฟล์',
    'create_file' => 'สร้างไฟล์',
    'create_directory' => 'สร้างโฟลเดอร์',
    'directory_popup_title' => 'โฟลเดอร์ใหม่',
    'directory_name' => 'ชื่อโฟลเดอร์',
    'rename' => 'เปลี่ยนชื่อ',
    'delete' => 'ลบ',
    'move' => 'ย้าย',
    'select' => 'เลือก',
    'new' => 'ไฟล์ใหม่',
    'rename_popup_title' => 'เปลี่ยนชื่อ',
    'rename_new_name' => 'ชื่อใหม่',
    'invalid_path' => 'path สามารถใส่ได้เฉพาะ ตัวเลข ตัวอักษรภาษาอังกฤษ ช่องว่าง และสัญลักษณ์ต่อไปนี้: ._-/',
    'error_deleting_file' => 'การลบไฟล์ :name ผิดพลาด',
    'error_deleting_dir_not_empty' => 'การลบโฟลเดอร์ผิดพลาด :name โฟลเดอร์นี้ไม่ว่างเปล่า',
    'error_deleting_dir' => 'การลบโฟลเดอร์ :name ผิดพลาด',
    'invalid_name' => 'ชื่อ สามารถใส่ได้เฉพาะ ตัวเลข ตัวอักษรภาษาอังกฤษ ช่องว่าง และสัญลักษณ์ต่อไปนี้: ._-',
    'original_not_found' => 'หาไฟล์หรือโฟลเดอร์ต้นทางไม่พบ',
    'already_exists' => 'ชื่อไฟล์หรือโฟลเดอร์นี้มีอยู่แล้ว',
    'error_renaming' => 'การเปลี่ยนชื่อไฟล์หรือโฟลเดอร์ผิดพลาด',
    'name_cant_be_empty' => 'ให้ชื่อว่างเปล่าไม่ได้',
    'too_large' => 'ไฟล์ที่ต้องการอัพโหลดใหญ่เกินไป ขนาดไฟล์สูงสุดที่อนุญาตคือ :max_size',
    'type_not_allowed' => 'อนุญาตเฉพาะประเภทไฟล์ต่อไปนี้: :allowed_types',
    'file_not_valid' => 'ไฟล์ไม่ถูกต้อง',
    'error_uploading_file' => 'อัพโหลดไฟล์ \':name\' ผิดพลาด: :error',
    'move_please_select' => 'กรุณาเลือก',
    'move_destination' => 'โฟลเดอร์ปลายทาง',
    'move_popup_title' => 'ย้ายสินทรัพย์',
    'move_button' => 'ย้าย',
    'selected_files_not_found' => 'ไม่พบไฟล์ที่เลือกไว้',
    'select_destination_dir' => 'กรุณาเลือกโฟลเดอร์ปลายทาง',
    'destination_not_found' => 'ไม่พบโฟลเดอร์ปลายทาง',
    'error_moving_file' => 'การย้ายไฟล์ :file ผิดพลาด',
    'error_moving_directory' => 'การย้ายโฟลเดอร์ :dir ผิดพลาด',
    'error_deleting_directory' => 'การลบโฟลเดอร์ต้นทาง :dir ผิดพลาด',
    'no_list_records' => 'ไม่พบไฟล์',
    'delete_confirm' => 'ลบไฟล์หรือโฟลเดอร์ที่เลือกไว้?',
    'path' => 'Path',
  ],
  'component' => [
    'menu_label' => 'ส่วนประกอบ',
    'unnamed' => 'ไม่มีชื่อ',
    'no_description' => 'ไม่มีรายละเอียดมาด้วย',
    'alias' => 'นามแฝง',
    'alias_description' => 'ชื่อที่ไม่ซ้ำที่กำหนดให้กับส่วนประกอบนี้สำหรับใช้ในโค้ดหน้าเว็บหรือโครงร่าง',
    'validation_message' => 'ต้องใส่นามแฝงส่วนประกอบ และสามารถใส่ได้เฉพาะ ตัวอักษรภาษาอังกฤษ ตัวเลข และเครื่องหมาย _  นามแฝงควรเริ่มต้นด้วยตัวอักษรภาษาอังกฤษ',
    'invalid_request' => 'แม่แบบไม่สามารถถูกบันทึกเนื่องจากข้อมูลส่วนประกอบไม่ถูกต้อง',
    'no_records' => 'ไม่พบส่วนประกอบ',
    'not_found' => 'หาส่วนประกอบ \':name\' ไม่พบ',
    'method_not_found' => 'ส่วนประกอบ \':name\' ไม่มี method ชื่อ \':method\'.',
  ],
  'template' => [
    'invalid_type' => 'ไม่รู้จักประเภทแม่แบบ',
    'not_found' => 'ไม่พบแม่แบบ',
    'saved' => 'บันทึกแม่แบบแล้ว',
    'no_list_records' => 'ไม่พบข้อมูล',
    'delete_confirm' => 'ลบแม่แบบที่เลือกไว้?',
    'order_by' => 'เรียงลำดับโดย',
  ],
  'permissions' => [
    'name' => 'CMS',
    'manage_content' => 'จัดการไฟล์เนื้อหาเว็บไซต์',
    'manage_assets' => 'จัดการสินทรัพย์ของเว็บไซต์ - รูปภาพ, ไฟล์ JavaScript, ไฟล์ CSS',
    'manage_pages' => 'สร้าง, แก้ไข และลบ หน้าเว็บไซต์',
    'manage_layouts' => 'สร้าง, แก้ไข และลบ โครงร่าง',
    'manage_partials' => 'สร้าง, แก้ไข และลบ ส่วนย่อย',
    'manage_themes' => 'เปิด, ปิดการใช้งาน และปรับแต่งค่า ธีม',
    'manage_theme_options' => 'ปรับแต่งค่าตัวเลือกต่างๆ สำหรับธีมที่ใช้งานอยู่',
  ],
  'theme_log' => [
    'hint' => 'บันทึกนี้แสดงการเปลี่ยนแปลงที่เกี่ยวกับธีมโดยผู้ดูแลระบบในส่วนหน้าเว็บหลังบ้าน',
    'menu_label' => 'บันทึกธีม',
    'menu_description' => 'ดูการเปลี่ยนแปลงของธีมที่กำลังใช้งานอยู่',
    'empty_link' => 'ลบบันทึกธีมทั้งหมด',
    'empty_loading' => 'กำลังลบบันทึกธีม...',
    'empty_success' => 'ลบบันทึกธีมเรียบร้อยแล้ว',
    'return_link' => 'กลับสู่หน้าบันทึกธีม',
    'id' => 'ไอดี',
    'id_label' => 'ไอดีบันทึก',
    'created_at' => 'วันเวลา',
    'user' => 'ผู้ใช้',
    'type' => 'ประเภท',
    'type_create' => 'สร้าง',
    'type_update' => 'อัพเดท',
    'type_delete' => 'ลบ',
    'theme_name' => 'ชื่อธีม',
    'theme_code' => 'รหัสธีม',
    'old_template' => 'แม่แบบเก่า',
    'new_template' => 'แม่แบบใหม่',
    'template' => 'แม่แบบ (Template)',
    'diff' => 'การเปลี่ยนแปลง',
    'old_value' => 'ค่าเก่า',
    'new_value' => 'ค่าใหม่',
    'preview_title' => 'Template changes',
    'template_updated' => 'อัพเดทแม่แบบแล้ว',
    'template_created' => 'สร้างแม่แบบแล้ว',
    'template_deleted' => 'ลบแม่แบบแล้ว',
  ],
];
