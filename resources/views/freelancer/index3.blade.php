@extends('freelancer.freelancer')
@section('content')
    <div class="page-wrapper">
        <div class="content report-box container-fluid">

            <div class="page-header subscribe-head">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Freelancer</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Freelancer</li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <a class="btn  add-user" href="javascript:void(0);" data-bs-toggle="modal"
                            data-bs-target="#add-category">
                            <i class="fas fa-plus "></i> Add Freelancer
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="subscribe-employe users-list">
                        <ul>
                            <li class="active"><a href="users.html">All Freelancer </a></li>
                            <li><a href="{{route('add.freelance')}}">Add Freelancer</a></li>
                            <li><a href="user-inactive.html">Inactive Freelancer</a></li>
                            <li><a href="user-suspended.html">Suspended</a></li>
                            <li><a href="user-administrator.html">Administrator</a></li>
                        </ul>
                    </div>

                    <div class="page-header user-active">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">All Freelancer</h3>
                                <p>Total <span>57</span> Freelancer account</p>
                            </div>
                            <div class="col-auto">
                                <a href="javascript:void(0);" class="btn export-btn me-1">
                                    <img src="assets_admin/img/export.svg" alt="Img"> Export
                                </a>
                                <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                                    <i class="fas fa-filter"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="card filter-card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <form action="#" method="post">
                                <div class="row filter-row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>Expertise</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                            @include('freelancer.table')

                </div>
            </div>
        </div>
    </div>

    </div>


    <div class="modal fade transaction-modal" id="transaction-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-wrap">
                    <div class="transaction-group">
                        <div class="head-transaction">
                            <h4>Transaction</h4>
                            <p> #TNX24586414</p>
                        </div>
                        <div class="complete-btn">
                            <a href="javascript:void(0);" class="btn btn-primary">Completed</a>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="table-avatar user-profile invest-acount">
                        <a href="profile.html"><i class="fas fa-exchange-alt exchange"></i>
                            <div>
                                <h5>Received from Investment Account</h5>
                                <p class="receive-date"> Mar 13, 2022<span>Completed</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="acount-transaction">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="basic-info ">
                                    <h4>IN ACCOUNT</h4>
                                    <div class="additional-info">
                                        <p> Amount </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p>Fees </p>
                                        <h5>0.00 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Total Investment </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="basic-info">
                                    <h4>IN TRANSACTION</h4>
                                    <div class="additional-info">
                                        <p> Amount </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p>Fees </p>
                                        <h5>0.00 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Total Investment </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Account </p>
                                        <h5>UID00003</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Email </p>
                                        <h5><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="54233d38383d353914312c35392438317a373b39">[email&#160;protected]</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail top-border">
                                    <h4>Order Details</h4>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Order Date</p>
                                                <h5>Mar 13, 2022</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p> Placed By</p>
                                                <h5>UID00001 </h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Completed At</p>
                                                <h5> Mar 13, 2022 07:00 PM</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Completed By</p>
                                                <h5> Super Admin</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail">
                                    <h4 class="mt-0">Additional Details</h4>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Transaction</p>
                                                <h5>Mar 13, 2022</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p> Payment Gateway</p>
                                                <h5>Paypal </h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Payment From</p>
                                                <h5> Dean Jones</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Payment To</p>
                                                <h5> Main Account</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="additional-info">
                                                <p>Updated Balance</p>
                                                <h5 class="active-balance">13,144.626 USD</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail ">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="additional-info mb-0">
                                                <p>Transaction Details</p>
                                                <h5> Received from Investment Account</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-wrap">
                    <div class="text-center w-100 mb-3">
                        <img src="assets_admin/img/logo-small.png" alt="Img">
                    </div>
                    <h4 class="modal-title">Add New Freelancer</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Freelancer Type</label>
                            <select class="form-control form-select">
                                <option>Select</option>
                                <option>Frontend Developer</option>
                                <option>Graphic Designer</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-wrap">
                    <div class="text-center w-100 mb-3">
                        <img src="assets_admin/img/logo-small.png" alt="Img">
                    </div>
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value=" George Wells">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="georgewells@example.com">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" value="*******">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" value="********">
                        </div>
                        <div class="form-group">
                            <label>User Type</label>
                            <select class="form-control form-select">
                                <option>Select</option>
                                <option selected>Frontend Developer</option>
                                <option>Graphic Designer</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal custom-modal fade" id="delete_category" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        new DataTable('#example');

    </script>

{{-- <script>
    $(job).ready(function() {
        $('#example').DataTable();

        $('.btn-delete').on('click', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var url = '{{ route('job.delete', ['id' => ':id']) }}'.replace(':id', id);
            console.log(url);
            if (confirm('Voulez-vous supprimer cet élément ?')) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(result) {
                        if (result.success) {
                            alert(result.success);
                            window.location.reload();
                        } else {
                            alert(result.error);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert(
                            'Une erreur s\'est produite lors de la suppression de l\'élément.'
                            );
                    }
                });
            }
        });
    });
</script> --}}
{{-- <script>
    let csrfToken = job.querySelector('meta[name="csrf-token"]').getAttribute('content');

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.btn-danger-custom').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();

                let id = this.getAttribute('data-id');
                if (confirm('Êtes-vous sûr de vouloir supprimer ce document?')) {
                    fetch(`/job/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert(data.success);
                            location.reload();
                        } else {
                            alert(data.error);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Une erreur s\'est produite lors de la suppression de l\'élément.');
                    });
                }
            });
        });
    });
</script> --}}

@endsection

{{-- @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif --}}
