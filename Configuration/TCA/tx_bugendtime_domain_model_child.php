<?php
return array(
        'ctrl' => array(
                'title' => 'Child',
                'label' => 'name',
                'tstamp' => 'tstamp',
                'crdate' => 'crdate',
                'delete' => 'deleted',
                'enablecolumns' => array(
                        'disabled' => 'hidden',
                        'starttime' => 'starttime',
// !!! do not specify enablecolumns|endtime to demonstrate the bug
//                        'endtime' => 'endtime',
                ),
                'hideTable' => true,
                'iconfile' => 'EXT:bug_endtime/Resources/Public/Icons/Extension.png',
        ),
        'interface' => array(
                'showRecordFieldList' => 'name',
        ),
        'palettes' => array(),
        'types' => array(
                '0' => array('showitem' => 'name'),
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
        ),
);
