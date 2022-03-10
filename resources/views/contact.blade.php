@extends('template')

@section('title')

@endsection


@section('contact_page')
<div class="d-flex justify-content-center py-5">
    <div class="container">

        <div class="row">

            <div class="col-lg col-lg-offset-2">

                <form id="contact-form" method="post" action="" role="form">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">First Name *</label>
                                    <input id="form_name" type="text" name="prenom" class="form-control"
                                        placeholder="Enter your first name please *" required="required"
                                        data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Last Name *</label>
                                    <input id="form_lastname" type="text" name="nom" class="form-control"
                                        placeholder="Enter your last name please *" required="required"
                                        data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">E-mail *</label>
                                    <input id="form_email" type="email" name="email" class="form-control"
                                        placeholder="Enter your e-mail please *" required="required"
                                        data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_phone">Phone</label>
                                    <input id="form_phone" type="tel" name="telephone" class="form-control"
                                        placeholder="Enter your phone number please">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Subject *</label>
                                    <select class="span3 my-2" id="sujet" name="sujet">
                                        <option selected value="na">
                                            Choose a subject:
                                        </option>

                                        <option value="Buy">
                                            Cancel a package
                                        </option>

                                        <option value="Discount">
                                            Ask for a discount
                                        </option>

                                        <option value="Other Services">
                                            Other services
                                        </option>

                                    </select>
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control my-2"
                                        placeholder="Message pour notre équipe *" rows="4" required
                                        data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-outline-secondary btn-sm border"
                                    value="Send message">
                            </div>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>
</div>
@endsection