@extends('admin.layout')

@section('title')
    Rooms
@endsection
@section('content')
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Order</th>
            <th scope="col">Product</th>
            <th scope="col">Customer</th>
            <th scope="col">Total</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">17371705</th>
            <td>Volt Premium Bootstrap 5 Dashboard</td>
            <td>johndoe@gmail.com</td>
            <td>€61.11</td>
            <td>Aug 31 2020</td>
            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
        </tr>
        <tr>
            <th scope="row">17370540</th>
            <td>Pixel Pro Premium Bootstrap UI Kit</td>
            <td>jacob.monroe@company.com</td>
            <td>$153.11</td>
            <td>Aug 28 2020</td>
            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
        </tr>
        <tr>
            <th scope="row">17371705</th>
            <td>Volt Premium Bootstrap 5 Dashboard</td>
            <td>johndoe@gmail.com</td>
            <td>€61.11</td>
            <td>Aug 31 2020</td>
            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
        </tr>
        <tr>
            <th scope="row">17370540</th>
            <td>Pixel Pro Premium Bootstrap UI Kit</td>
            <td>jacob.monroe@company.com</td>
            <td>$153.11</td>
            <td>Aug 28 2020</td>
            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
        </tr>
        <tr>
            <th scope="row">17371705</th>
            <td>Volt Premium Bootstrap 5 Dashboard</td>
            <td>johndoe@gmail.com</td>
            <td>€61.11</td>
            <td>Aug 31 2020</td>
            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
        </tr>
        <tr>
            <th scope="row">17370540</th>
            <td>Pixel Pro Premium Bootstrap UI Kit</td>
            <td>jacob.monroe@company.com</td>
            <td>$153.11</td>
            <td>Aug 28 2020</td>
            <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
        </tr>
        </tbody>
    </table>
</div>
@endsection
@section('modal')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Default form contact -->
            <form class="text-center border border-light p-5" action="#!">

                <p class="h4 mb-4">Contact us</p>

                <!-- Name -->
                <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

                <!-- Email -->
                <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

                <!-- Subject -->
                <label>Subject</label>
                <select class="browser-default custom-select mb-4">
                    <option value="" disabled>Choose option</option>
                    <option value="1" selected>Feedback</option>
                    <option value="2">Report a bug</option>
                    <option value="3">Feature request</option>
                    <option value="4">Feature request</option>
                </select>

                <!-- Message -->
                <div class="form-group">
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                </div>

                <!-- Copy -->
                <div class="custom-control custom-checkbox mb-4">
                    <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                    <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
                </div>

                <!-- Send button -->
                <button class="btn btn-info btn-block" type="submit">Send</button>

            </form>
            <!-- Default form contact -->
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div>


@endsection


