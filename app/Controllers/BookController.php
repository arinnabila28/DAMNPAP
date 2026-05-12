<?php

namespace App\Controllers;
use App\Models\BookModel;

class BookController extends BaseController
{
    public function index(): string
    {
        $bookModel = new BookModel();
        $data = [
            'tittle' => 'Daftar Buku',
            'books' => $bookModel->findAll()
        ];
        return view('books/index', $data);
    }
    
    public function create()
    {
        $data['title'] = 'Tambah Buku';
        return view('books/create');
    }

    public function store()
    {
        $model = new BookModel();
        $data = [
            'code_book' => $this->request->getPost('code_book'),
            'isbn_book' => $this->request->getPost('isbn_book'),
            'title_book' => $this->request->getPost('title_book'),
            'author_book' => $this->request->getPost('author_book'),
            'publisher_book' => $this->request->getPost('publisher_book'),
            'published_year' => $this->request->getPost('published_year'),
            'description_book' => $this->request->getPost('description_book')
        ];
        if ($model->save($data)) {
            session()->setFlashdata('success', 'Buku berhasil disimpan!');
            return redirect()->to('/list/books');
        } else {
            dd($model->errors());
        }

    }

    public function edit($id)
    {
        // script php untuk load data dari database
        $data = [
            'id'   => $id,
            'title_book' => 'Judul Buku '.$id,
            'author_book' => 'Penulis Buku '.$id,
            'publisher_book' => 'Penerbit Buku '.$id,
            'published_year' => '2023',
            'stock' => '10'
        ];
        // end of script
        return view('books/edit', $data);
    }

    public function update($id)
    {
        // script php untuk memperbarui data di database
        // end of script
        return redirect()->to('/list/books');
    }
}