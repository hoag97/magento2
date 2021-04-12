<?php
namespace Tigren\QuestionModule\Setup;
 
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
 
 
class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $tableName = $setup->getTable('tigren_question');
        if (version_compare($context->getVersion(), '1.0.2', '<')) {
             if ($setup->getConnection()->isTableExists($tableName) != true){
                 $table = $setup->getConnection()->newTable($tableName)
                     ->addColumn(
                         'id',
                         Table::TYPE_INTEGER,
                         null,
                         [
                             'identity' => true,
                             'unsigned' => true,
                             'nullable' => false,
                             'primary' => true
                         ],
                         'ID'
                     )
                     ->addColumn(
                         'question',
                         Table::TYPE_TEXT,
                         null,
                         ['nullable' => false, 'default' => ''],
                         'Question'
                     )
                     ->addColumn(
                         'answer',
                         Table::TYPE_TEXT,
                         null,
                         ['nullable' => false, 'default' => ''],
                         'Answer'
                     )
                    ->addColumn(
                        'name',
                        Table::TYPE_TEXT,
                        null,
                        ['nullable' => false, 'default' => ''],
                        'Name'
                    )
                    ->addColumn(
                        'email',
                        Table::TYPE_TEXT,
                        null,
                        ['nullable' => false, 'default' => ''],
                        'Email'
                    )
                     ->addColumn(
                         'create_at',
                         Table::TYPE_DATETIME,
                         null,
                         [
                             'nullable' => false, \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT
                         ],
                         'Create_at'
                     )
                     ->setComment('Tigren Question')
                     ->setOption('type', 'InnoDB')
                     ->setOption('charset', 'utf8');
                 $setup->getConnection()->createTable($table);
             }
        }
 
        $setup->endSetup();
    }
}