<?php

namespace Numthang\Blog;

use File;
use Rainlab\Blog\Controllers\Posts as PostsController;
use Rainlab\Blog\Models\Post as PostModel;
use System\Classes\PluginBase;
use BackendAuth;
/**
 * Blog Plugin Information File
 */
class Plugin extends PluginBase {
  public $require = ['RainLab.Blog'];

  /**
   * Returns information about this plugin.
   *
   * @return array
   */
  public function pluginDetails()
  {
      return [
          'name'        => 'Numthang Blog Extension',
          'description' => 'A Numthang blog extension for the RainLab.Blog plugin.',
          'author'      => 'Numthang',
          'icon'        => 'icon-leaf'
      ];
  }

  /**
   * Register plugin components
   *
   * @return array
   */
  public function registerComponents() {
    return [
        'Numthang\Blog\Components\Post' => 'blogPost',
        'Numthang\Blog\Components\Posts' => 'scopePosts'
    ];
  }

  public function registerMarkupTags() {
    return [
        'functions' => [
            'ddump' => function($var) { var_dump($var); }
        ]
    ];
  }
  public function registerPermissions() {
    return [
      'rainlab.blog.confidential_files' => [
          'label' => 'Manage blog confidential files',
          'tab'   => 'rainlab.blog::lang.blog.tab',
      ]
    ];
  }
  public function boot() {
    PostModel::extend(function($model) {
      #$model->extendClassWith('RainLab\Translate\Behaviors\TranslatableModel');
      #$model->addDynamicProperty('translatable', ['refno', 'preview_text']);
      #$model->translatable = ['refno', 'archives_1_5'];

      $model->attachMany = [
        'featured_files' => ['System\Models\File'],
        'project_files' => ['System\Models\File'],
        'management_files' => ['System\Models\File'],
        'result_files' => ['System\Models\File'],
        'key_files' => ['System\Models\File'],        
        'data_files' => ['System\Models\File', 'public' => false],
        'featured_images' => 'System\Models\File',
      ];
      $model->addFillable([
        'featured',
      ]);
    });
    PostsController::extendFormFields(function($form, $model, $context) {//เพิ่ม user form ใน backend
      $user = BackendAuth::getUser();

      if (!$model instanceof PostModel) {
        return;
      }
      $form->addSecondaryTabFields([
        'featured' => [
          'label' => 'Featured Post',
          'type' => 'checkbox',
          'tab' => 'rainlab.blog::lang.post.tab_manage'
        ],
      ]);
      $form->addSecondaryTabFields([
        'featured_files' => [
          'label' => 'Featured Files',
          'tab' => 'Files',
          'type' => 'fileupload',
          'mode' => 'file',
        ],
      ]);
      $form->addSecondaryTabFields([
        'project_files' => [
          'label' => '1.1 เอกสารโครงการวิจัย (research project)',
          'tab' => 'Files',
          'type' => 'fileupload',
          'mode' => 'file',
        ],
        'management_files' => [
          'label' => '1.2 การบริหารงานวิจัย (research management)',
          'tab' => 'Files',
          'type' => 'fileupload',
          'mode' => 'file',
        ],
        'result_files' => [
          'label' => '1.3 ผลการวิจัยและการเผยแพร่ (result and distribution)',
          'tab' => 'Files',
          'type' => 'fileupload',
          'mode' => 'file',
        ],
        'key_files' => [
          'label' => '1.4 เอกสารอ้างอิงที่สำคัญของโครงการวิจัย (key reference)',
          'tab' => 'Files',
          'type' => 'fileupload',
          'mode' => 'file',
        ],
      ]);
      if($user->hasAccess('rainlab.blog.confidential_files'))
        $form->addSecondaryTabFields([
          'data_files' => [
            'label' => '1.5 ข้อมูลจากการดำเนินการวิจัย (research data)',
            'tab' => 'Files',
            'type' => 'fileupload',
            'mode' => 'file',
          ],        
        ]);
      /*'collector' => [
          'label' => 'ผู้รวบรวมเอกสาร',
          'tab' => 'Metadata',
          'type' => 'Text',
          'span' => 'right'
        ],*/
      $form->addSecondaryTabFields([
        'refno' => [
          'label' => 'รหัสเอกสาร',
          'tab' => 'Metadata',
          'type' => 'text',
          'span' => 'left'
        ],
        
        'archives_1_1' => [
          'label' => '1.1 สัญลักษณ์หรือรหัสอ้างอิง (Reference code(s))',
          'tab' => 'Metadata',
          'type' => 'text',
          'span' => 'left'
        ],
        'archives_1_2' => [
          'label' => '1.2 ชื่อเอกสาร (Title)',
          'tab' => 'Metadata',
          'type' => 'text',
          'span' => 'right'
        ],
        'archives_1_3' => [
          'label' => '1.3 วัน เดือน ปี ของเอกสาร (Date(s))',
          'tab' => 'Metadata',
          'type' => 'text',
          'span' => 'left'
        ],
        'archives_1_4' => [
          'label' => '1.4 ระดับของคำอธิบายเอกสาร (Level of description)',
          'tab' => 'Metadata',
          'type' => 'text',
          'span' => 'right'
        ],
        'archives_1_5' => [
          'label' => '1.5 ขนาดและสื่อของเอกสาร (ปริมาณ จำนวนหรือขนาด) (Extent and medium of the unit of description)',
          'tab' => 'Metadata',
          'type' => 'textarea',
          'size' => 'small'
        ],
        'archives_2_1' => [
          'label' => '2.1 ชื่อผู้ผลิต/รวบรวมเอกสาร (Name of creator(s))',
          'tab' => 'Metadata',
          'type' => 'text',
          'span' => 'left'
        ],
        'archives_2_2' => [
          'label' => '2.2 ประวัติหน่วยงานหรือประวัติเจ้าของเอกสาร (Administrative / Biographical history)',
          'tab' => 'Metadata',
          'type' => 'textarea',
        ],
        'archives_2_3' => [
          'label' => '2.3 ประวัติของเอกสารจดหมายเหตุ (Archival history)',
          'tab' => 'Metadata',
          'type' => 'textarea',
          'size' => 'small'
        ],
        'archives_2_4' => [
          'label' => '2.4 แหล่งเอกสารหรือหน่วยงานหรือผู้มอบหรือโอนย้ายเอกสาร (Immediate source of acquisition or transfer)',
          'tab' => 'Metadata',
          'type' => 'text',
          'span' => 'left'
        ],
        'archives_3_1' => [
          'label' => '3.1 ขอบเขตและเนื้อหาของเอกสาร (Scope and content)',
          'tab' => 'Metadata',
          'type' => 'textarea',
          'size' => 'small'
        ],
        'archives_3_2' => [
          'label' => '3.2 การประเมินคุณค่า การทำลายและการกำหนดอายุการเก็บเอกสาร (Appraisal destruction and scheduling information)',
          'tab' => 'Metadata',
          'type' => 'textarea',
          'size' => 'small'
        ],
        'archives_3_3' => [
          'label' => '3.3 การเพิ่มขึ้นของเอกสาร (Accruals)',
          'tab' => 'Metadata',
          'type' => 'text',
          'span' => 'left'
        ],
        'archives_3_4' => [
          'label' => '3.4 ระบบการจัดเรียงเอกสาร (System of arrangement)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
        'archives_4_1' => [
          'label' => '4.1 เงื่อนไขในการเข้าถึงเอกสาร (Conditions governing access)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
        'archives_4_2' => [
          'label' => '4.2 เงื่อนไขการทำสำเนาเอกสาร (Conditions governing reproduction)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
        'archives_4_3' => [
          'label' => '4.3 ภาษา/ตัวอักษรของวัสดุจดหมายเหตุ (Language/scripts of material)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
        'archives_4_4' => [
          'label' => '4.4 ลักษณะทางกายภาพและทางเทคนิคที่มีผลต่อการใช้เอกสาร (Physical characteristics and technical requirements)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
        'archives_4_5' => [
          'label' => '4.5 เครื่องมือช่วยค้น (Finding aids)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
        'archives_5_1' => [
          'label' => '5.1 สถานที่เก็บเอกสารต้นฉบับ (Existence and location of originals)',
          'tab' => 'Metadata',
          'type' => 'textarea',
          'size' => 'small'
        ],
        'archives_5_2' => [
          'label' => '5.2 สถานที่เก็บเอกสารฉบับสำเนา (Existence and location of copies)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
        'archives_5_3' => [
          'label' => '5.3 เอกสารที่เกี่ยวข้อง (Related units of description)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
        'archives_5_4' => [
          'label' => '5.4 ข้อความเกี่ยวกับการพิมพ์ (Publication note)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
        'archives_6_1' => [
          'label' => '6.1 หมายเหตุ (Notes)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
        'archives_7_1' => [
          'label' => '7.1 บันทึกของนักจดหมายเหตุ (Archivist\'s note)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
        'archives_7_2' => [
          'label' => '7.2 กฎ ระเบียบหรือแนวปฏิบัติ (Rules or conventions)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
        'archives_7_3' => [
          'label' => '7.3 วัน เดือน ปีที่จัดทำคำอธิบายเอกสาร (Date(s) of descriptions)',
          'tab' => 'Metadata',
          'type' => 'text',
        ],
      ]);
    });
  }
}
