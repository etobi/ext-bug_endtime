<?php
return array(
        'ctrl' => array(
                'title' => 'Parent',
                'label' => 'name',
                'tstamp' => 'tstamp',
                'crdate' => 'crdate',
                'delete' => 'deleted',
                'enablecolumns' => array(
                        'disabled' => 'hidden',
                        'starttime' => 'starttime',
                        'endtime' => 'endtime',
                ),
                'iconfile' => 'EXT:bug_endtime/Resources/Public/Icons/Extension.png',
        ),
        'interface' => array(
                'showRecordFieldList' => 'name',
        ),
        'palettes' => array(),
        'types' => array(
                '0' => array('showitem' => 'name, children'),
        ),
        'columns' => array(
                'starttime' => [
                        'exclude' => 1,
                        'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
                        'config' => [
                                'type' => 'input',
                                'size' => '13',
                                'eval' => 'datetime',
                                'default' => '0'
                        ]
                ],
                'endtime' => [
                        'exclude' => 1,
                        'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
                        'config' => [
                                'type' => 'input',
                                'size' => '13',
                                'eval' => 'datetime',
                                'default' => '0',
                                'range' => [
                                        'upper' => mktime(0, 0, 0, 1, 1, 2038)
                                ]
                        ]
                ],
                'hidden' => [
                        'exclude' => 1,
                        'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
                        'config' => [
                                'type' => 'check',
                                'default' => '0'
                        ]
                ],
                'name' => array(
                        'label' => "Name",
                        'config' => array(
                                'type' => 'input',
                                'size' => 20,
                                'eval' => 'trim,required',
                                'max' => 255
                        )
                ),
                'children' => array(
                        'label' => "Children",
                        'config' => array(
                                'type' => 'inline',
                                'foreign_table' => 'tx_bugendtime_domain_model_child',
                                'foreign_field' => 'parent',
                                'maxitems' => 99,
                                'appearance' => array(
                                        'useSortable' => true,
                                        'enabledControls' => array(
                                                'dragdrop' => true
                                        )
                                )
                        )
                ),

        ),
);
