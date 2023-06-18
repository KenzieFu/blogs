@extends('admin.layouts.adminpanel')
@section('admincontent')
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h3 class="heading mb-4">Tambah Kategori</h3>
                        <p>Silakan edit kategori yang diinginkan!</p>
                        <p><img src="/images/admin-img/img/icons/undraw-contact.svg" alt="Image" class="img-fluid"></p>
                    </div>
                    <div class="col-md-6">
                        @foreach($categories as $c)
                        <form class="mb-5" method="post" id="addForm" name="addForm" action="/makecategory/update">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col mx-4 my-3 form-group">
                                    <input type="hidden" name="id" value={{$c ->id}}>
                                    <input type="text" class="form-control" name="category_name" value={{$c -> name}}>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mx-4 my-3">
                                    <input type="submit" value="Update" class="btn btn-primary rounded-0 py-2 px-4">
                                    <span class="submitting"></span>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
