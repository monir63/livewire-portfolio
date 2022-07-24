{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.base')
@section('content')
<div id="content" class="col-md-12">
    <div class="table_data">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h4 class="mb-0 ">Client</h4>
            <div class="d-flex align-items-center">
                <button class="me-1"><i class="fa fa-upload me-1"></i> Import Clients</button>
            <button onclick="addClient()"><i class="fa me-1 fa-user-plus"></i> Add Clients</button>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-3">
            <select class="select" name="" id="">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <div class="search">
                <input placeholder="Search" type="text" name="" id="">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-borderless text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Primary contact</th>
                        <th>Client groups</th>
                        <th>Projects</th>
                        <th>Total invoiced</th>
                        <th>Payment Received</th>
                        <th>Due</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>John</td>
                            <td>
                                <div class="payment_profile">
                                    <img src="https://rise.fairsketch.com/files/profile_images/_file62ad955b55c00-avatar.png" alt="">
                                    <p>Smith Dev</p>
                                </div>
                            </td>
                            <td>Gold</td>
                            <td>1</td>
                            <td>$ 1000</td>
                            <td>$ 600</td>
                            <td>$ 400</td>
                            <td>
                                <div class="action">
                                    <i onclick="toggleModal()" class="fa fa-pencil"></i>
                                <i onclick="deleteAlert()" class="fa fa-times"></i>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>
                                <div class="payment_profile">
                                    <img src="https://rise.fairsketch.com/files/profile_images/_file62ad955b55c00-avatar.png" alt="">
                                    <p>Smith Dev</p>
                                </div>
                            </td>
                            <td>Gold</td>
                            <td>1</td>
                            <td>$ 1000</td>
                            <td>$ 600</td>
                            <td>$ 400</td>
                            <td>
                                <div class="action">
                                    <i onclick="toggleModal()" class="fa fa-pencil"></i>
                                <i onclick="deleteAlert()" class="fa fa-times"></i>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>John</td>
                            <td>
                                <div class="payment_profile">
                                    <img src="https://rise.fairsketch.com/files/profile_images/_file62ad955b55c00-avatar.png" alt="">
                                    <p>Smith Dev</p>
                                </div>
                            </td>
                            <td>Gold</td>
                            <td>1</td>
                            <td>$ 1000</td>
                            <td>$ 600</td>
                            <td>$ 400</td>
                            <td>
                                <div class="action">
                                    <i  onclick="toggleModal()" class="fa fa-pencil"></i>
                                <i onclick="deleteAlert()" class="fa fa-times"></i>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>John</td>
                            <td>
                                <div class="payment_profile">
                                    <img src="https://rise.fairsketch.com/files/profile_images/_file62ad955b55c00-avatar.png" alt="">
                                    <p>Smith Dev</p>
                                </div>
                            </td>
                            <td>Gold</td>
                            <td>1</td>
                            <td>$ 1000</td>
                            <td>$ 600</td>
                            <td>$ 400</td>
                            <td>
                                <div class="action">
                                    <i onclick="toggleModal()" class="fa fa-pencil"></i>
                                <i onclick="deleteAlert()" class="fa fa-times"></i>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>John</td>
                            <td>
                                <div class="payment_profile">
                                    <img src="https://rise.fairsketch.com/files/profile_images/_file62ad955b55c00-avatar.png" alt="">
                                    <p>Smith Dev</p>
                                </div>
                            </td>
                            <td>Gold</td>
                            <td>1</td>
                            <td>$ 1000</td>
                            <td>$ 600</td>
                            <td>$ 400</td>
                            <td>
                                <div class="action">
                                    <i onclick="toggleModal()" class="fa fa-pencil"></i>
                                <i onclick="deleteAlert()" class="fa fa-times"></i>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>John</td>
                            <td>
                                <div class="payment_profile">
                                    <img src="https://rise.fairsketch.com/files/profile_images/_file62ad955b55c00-avatar.png" alt="">
                                    <p>Smith Dev</p>
                                </div>
                            </td>
                            <td>Gold</td>
                            <td>1</td>
                            <td>$ 1000</td>
                            <td>$ 600</td>
                            <td>$ 400</td>
                            <td>
                                <div class="action">
                                    <i onclick="toggleModal()" class="fa fa-pencil"></i>
                                <i onclick="deleteAlert()" class="fa fa-times"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>John</td>
                            <td>
                                <div class="payment_profile">
                                    <img src="https://rise.fairsketch.com/files/profile_images/_file62ad955b55c00-avatar.png" alt="">
                                    <p>Smith Dev</p>
                                </div>
                            </td>
                            <td>Gold</td>
                            <td>1</td>
                            <td>$ 1000</td>
                            <td>$ 600</td>
                            <td>$ 400</td>
                            <td>
                                <div class="action">
                                    <i onclick="toggleModal()" class="fa fa-pencil"></i>
                                <i onclick="deleteAlert()" class="fa fa-times"></i>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>John</td>
                            <td>
                                <div class="payment_profile">
                                    <img src="https://rise.fairsketch.com/files/profile_images/_file62ad955b55c00-avatar.png" alt="">
                                    <p>Smith Dev</p>
                                </div>
                            </td>
                            <td>Gold</td>
                            <td>1</td>
                            <td>$ 1000</td>
                            <td>$ 600</td>
                            <td>$ 400</td>
                            <td>
                                <div class="action">
                                    <i onclick="toggleModal()" class="fa fa-pencil"></i>
                                <i onclick="deleteAlert()" class="fa fa-times"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>John</td>
                            <td>
                                <div class="payment_profile">
                                    <img src="https://rise.fairsketch.com/files/profile_images/_file62ad955b55c00-avatar.png" alt="">
                                    <p>Smith Dev</p>
                                </div>
                            </td>
                            <td>Gold</td>
                            <td>1</td>
                            <td>$ 1000</td>
                            <td>$ 600</td>
                            <td>$ 400</td>
                            <td>
                                <div class="action">
                                    <i onclick="toggleModal()" class="fa fa-pencil"></i>
                                <i onclick="deleteAlert()" class="fa fa-times"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>John</td>
                            <td>
                                <div class="payment_profile">
                                    <img src="https://rise.fairsketch.com/files/profile_images/_file62ad955b55c00-avatar.png" alt="">
                                    <p>Smith Dev</p>
                                </div>
                            </td>
                            <td>Gold</td>
                            <td>1</td>
                            <td>$ 1000</td>
                            <td>$ 600</td>
                            <td>$ 400</td>
                            <td>
                                <div class="action">
                                    <i onclick="toggleModal()" class="fa fa-pencil"></i>
                                <i onclick="deleteAlert()" class="fa fa-times"></i>
                                </div>
                            </td>
                        </tr>


                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9">
                                <div class="d-flex justify-content-between">
                                    <div class="pagination">
                                        <a class="disabled" href="#"><i class="fa fa-angle-left"></i></a>
                                        <a class="active" href="#">1</a>
                                        <a href="#">2</a>
                                        <a href="#">3</a>
                                        <a href="#">4</a>
                                        <a href="#">5</a>
                                        <a href="#"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="total me-3">
                                        <p>Total: <span>5</span></p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
