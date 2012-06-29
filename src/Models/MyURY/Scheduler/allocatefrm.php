<?php
$form = new MyURYForm('sched_allocate', $module, 'doAllocate',
        array(
            'debug' => true,
            'title' => 'Allocate Show'
            //'template' => 'MyURY/Scheduler/allocate.twig'
        ));

$form->addField(
        new MyURYFormField('Text', MyURYFormField::TYPE_TEXT)
        )
        ->addField(
                new MyURYFormField('Number', MyURYFormField::TYPE_NUMBER)
                )
        ->addField(
                new MyURYFormField('Email', MyURYFormField::TYPE_EMAIL)
                )
        ->addField(
                new MyURYFormField('Date', MyURYFormField::TYPE_DATE)
                )
        ->addField(
                new MyURYFormField('Date/Time', MyURYFormField::TYPE_DATETIME)
                )
        ->addField(
                new MyURYFormField('Member', MyURYFormField::TYPE_MEMBER)
                )
        ->addField(
                new MyURYFormField('Track', MyURYFormField::TYPE_TRACK)
                )
        ->addField(
                new MyURYFormField('Artist', MyURYFormField::TYPE_ARTIST)
                )
        ->addField(
                new MyURYFormField('Hidden', MyURYFormField::TYPE_HIDDEN)
                )
        ->addField(
                new MyURYFormField('Select', MyURYFormField::TYPE_SELECT,
                        array('options'=>array(array('value'=>0,'text'=>'test'))))
                )
        ->addField(
                new MyURYFormField('Radio', MyURYFormField::TYPE_RADIO,
                        array('options' =>
                            array(
                                array('value' => 1, 'text' => 'Week 1'),
                                array('value' => 1, 'text' => 'Weeks 2-10')
                            )))
                )
        ->addField(
                new MyURYFormField('Checkbox', MyURYFormField::TYPE_CHECK)
                )
        ->addField(
                new MyURYFormField('Day', MyURYFormField::TYPE_DAY)
                )
        ->addField(
                new MyURYFormField('Block Text', MyURYFormField::TYPE_BLOCKTEXT)
                )
        ->addField(
                new MyURYFormField('Time', MyURYFormField::TYPE_TIME)
                )
        ->addField(
                new MyURYFormField('CheckboxGroup', MyURYFormField::TYPE_CHECKGRP,
                        array('options' =>
                            array(
                                new MyURYFormField('wk1', MyURYFormField::TYPE_CHECK, array('label' => 'Week 1', 'required' => false)),
                                new MyURYFormField('wk2', MyURYFormField::TYPE_CHECK, array('label' => 'Week 2', 'required' => false)),
                                new MyURYFormField('wk3', MyURYFormField::TYPE_CHECK, array('label' => 'Week 3', 'required' => false)),
                                new MyURYFormField('wk4', MyURYFormField::TYPE_CHECK, array('label' => 'Week 4', 'required' => false)),
                                new MyURYFormField('wk5', MyURYFormField::TYPE_CHECK, array('label' => 'Week 5', 'required' => false)),
                                new MyURYFormField('wk6', MyURYFormField::TYPE_CHECK, array('label' => 'Week 6', 'required' => false)),
                                new MyURYFormField('wk7', MyURYFormField::TYPE_CHECK, array('label' => 'Week 7', 'required' => false)),
                                new MyURYFormField('wk8', MyURYFormField::TYPE_CHECK, array('label' => 'Week 8', 'required' => false)),
                                new MyURYFormField('wk9', MyURYFormField::TYPE_CHECK, array('label' => 'Week 9', 'required' => false)),
                                new MyURYFormField('wk10', MyURYFormField::TYPE_CHECK, array('label' => 'Week 10', 'required' => false))
                            ))));