<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/4/2017
 * Time: 12:30 AM
 */
$config=[
    'account_delete'=>[
        [
            'field'=>'account_name_delete',
            'label'=>'Account Name',
            'rules'=>'required'
        ]
    ],
    'payments'=>[
        [
            'field'=>'vch_no',
            'label'=>'Voucher Number',
            'rules'=>'required'
        ]
    ],
    'organisation_info'=>[
        [
            'field'=>'name',
            'label'=>'Organisation Name',
            'rules'=>'required'
        ]
    ],
    'fees_head_del'=>[
        [
            'field'=>'fees_heading',
            'label'=>'Fees Heading',
            'rules'=>'required'
        ]
    ],
    'fees_head'=>[
        [
            'field'=>'fees_heading',
            'label'=>'Fees Heading',
            'rules'=>'required'
        ]
    ],
    'account'=>[
        [
            'field'=>'account_name',
            'label'=>'Account Group Name',
            'rules'=>'required'
        ]
    ],
    'account_gr_delete'=>
        [
            [
                'field'=>'account_group_delete',
                'label'=>'Account Group Name',
                'rules'=>'required'
            ]
        ],
    'account_group'=>
        [
            [
                'field'=>'account_group_name',
                'label'=>'Account Group Name',
                'rules'=>'required'
            ]
        ],
    'fhg'=>
        [
            [
                'field'=>'fees_head_group_name',
                'label'=>'Fees Head Group Name',
                'rules'=>'required'
            ]
        ],
    'adm_form'=>
        [
            [
                'field'=>'adm_no',
                'label'=>'Admission No.',
                'rules'=>'required'
            ]
        ],
    'section_del'=>
        [
            [
                'field'=>'section_delete',
                'label'=>'Section',
                'rules'=>'required'
            ]
        ],
    'house'=>
        [
            [
                'field'=>'house_name',
                'label'=>'House Name',
                'rules'=>'required'
            ]
        ],
    'section'=>
        [
            [
                'field'=>'section_name',
                'label'=>'Section',
                'rules'=>'required'
            ]
        ],
    'caste'=>
        [
            [
                'field'=>'caste_name',
                'label'=>'Caste Name',
                'rules'=>'required'
            ]
        ],
    'category'=>
        [
            [
                'field'=>'category_name',
                'label'=>'Category Name',
                'rules'=>'required'
            ]
        ],

    'admin_form' =>
        [
            [
                'field'=>'email',
                'label'=>'Email',
                'rules'=>'required'
            ],
            [
                'field'=>'password',
                'label'=>'Password',
                'rules'=>'required'
            ]
        ],
    'student'=>
        [
            [
                'field'=>'student_first_name',
                'label'=>'Student First Name',
                'rules'=>'required'

            ],
            [
                'field'=>'student_last_name',
                'label'=>'Student Last Name',
                'rules'=>'required'
            ],
            [
                'field'=>'admission_no',
                'label'=>'Admission Number',
                'rules'=>'required'
            ],
            [
            'field'=>'student_dob',
            'label'=>'Date Of Birth',
            'rules'=>'required'
            ],
            [
                'field'=>'student_roll_no',
                'label'=>'Roll Number',
                'rules'=>'required'
            ]
        ],
    'address'=>
        [
            [
                'field'=>'house_no',
                'label'=>'House Number',
                'rules'=>'required'
            ],
            [
                'field'=>'city',
                'label'=>'City',
                'rules'=>'required'
            ],
        ],
    'misc_stu_details'=>
        [
            [
                'field'=>'las',
                'label'=>'Last attended School',
                'rules'=>'required'
            ]
        ],
    'attach'=>
        [
            [
                'field'=>'admission_form_no',
                'label'=>'Admission form number',
                'rules'=>'required'
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ]
        ],
    'contact_us'=>
        [
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ]
        ],
    'misc_info'=>
        [
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
        ],
    'balance'=>
        [
            [
                'field'=>'ledger_balance',
                'label'=>'Ledger Balance',
                'rules'=>'required'
            ],
        ],
    'other_info'=>
        [
            [
                'field'=>'fathers_first_name',
                'label'=>'Fathers First Name',
                'rules'=>'required'
            ],
            [
                'field'=>'mothers_first_name',
                'label'=>'Mothers First Name',
                'rules'=>'required'
            ]

        ],
    'owner'=>
        [
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ],
            [
                'field'=>'',
                'label'=>'',
                'rules'=>''
            ]
        ],
    'class'=>
        [
            [
                'field'=>'class',
                'label'=>'Class',
                'rules'=>'required'
            ]

        ],
    'class_del'=>
        [
            [
            'field'=>'class_delete',
            'label'=>'Class',
            'rules'=>'required'
            ]
        ]


];