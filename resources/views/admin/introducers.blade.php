@extends('admin.master')
@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
            <form class="form-group row" method="GET" action="{{URL('/admin/rouzz/search')}}">
                <input type="hidden" name="target" value="introducer">
                <input type="text" placeholder="Search Introducers" class="col-md-4 form-control" name="term">
                <button class="btn btn-primary col-md-1 mx-5 mt-3 mt-md-0" type="submit">Search</button>
            </form>
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Introducers
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <table class="table">
                        <thead class="font-weight-bolder">
                        <tr>
                            <th>Verified</th>
                            <th>Organization Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <td>Actions</td>
                        </tr>
                        </thead>
                        <tbody class="text-grey">
                        @foreach($introducers as $introducer)
                            <tr>
                                <td>
                                    @if($introducer->user->verified === 1)
                                        <i class="la la-check text-success font-weight-bolder"></i>
                                    @else
                                        <i class="la la-times font-weight-bolder"></i>
                                    @endif
                                </td>
                                <td>{{$introducer->name}}</td>
                                <td>{{$introducer->email}}</td>
                                <td>{{$introducer->phone}}</td>
                                <td>{{$introducer->address}}</td>
                                <td class="row justify-content-between">
                                    <a href="{{URL('/admin/rouzz/introducer/'.encrypt($introducer->user->id))}}" class="btn btn-success">View</a>
                                    @if($admin->role !== "business-team" && $adminType !== "introducer-admin" && $adminType !== "operations-admin" && $adminType !== "marketing-admin")
                                        <a href="{{URL('/admin/rouzz/user/delete/'.encrypt($introducer->user->id))}}" class="btn btn-danger">Delete</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        {{$introducers->links()}}
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
