<?php

$config = array(
    'mahasiswa/tambahMahasiswa' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'Nama wajib diisi'
            )
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|valid_email|is_unique[mahasiswa.email]',
            'errors' => array(
                'required' => 'Email wajib diisi',
                'valid_email' => 'Isi dengan email valid',
                'is_unique' => 'Email sudah terdaftar'
            )
        ),
        array(
            'field' => 'program_studi',
            'label' => 'Program Studi',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'Program studi wajib diisi'
            )
        ),
    ),
    'mahasiswa/updateMahasiswa' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'Nama wajib diisi'
            )
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|valid_email|is_unique[mahasiswa.email]',
            'errors' => array(
                'required' => 'Email wajib diisi',
                'valid_email' => 'Isi dengan email valid',
                'is_unique' => 'Email sudah terdaftar'
            )
        ),
        array(
            'field' => 'program_studi',
            'label' => 'Program Studi',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'Program studi wajib diisi'
            )
        ),
    )
);
