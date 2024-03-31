<div class="col-md-12 card px-4">
    <form method="post" action="/minox/assets/php/contact.php" id="contact-form">
        <div class="row mt-2  " id="new_payment_container">
            <div class="col-xl-12 col-md-12 ">
                <div class="card card-custom">

                    <div class="card-body p-3 ">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <dt class=" pt-1">PAYMENT METHOD</dt>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group mb-0">
                                    <select class="form-control form-control pl-1"
                                        id="docs_type_options" onchange="showPaymentMethod()"
                                        style="cursor:pointer;">
                                        <option selected value='0' disabled> Payment Type
                                        </option>

                                        <option value='19'>Binance Pay</option>
                                        <option value='20'>Skrill</option>
                                        <option value='21'>Neteller</option>
                                    </select>
                                    <dt id="payment_type_used_for" class="text-primary">&nbsp;
                                    </dt>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 " id="payment_details_container" style="display:none;">
            <div class="col-xl-12 col-md-12 ">
                <div class="card card-custom">
                    <div class="col-md-6 card-header card-header-transparent pl-3">
                        <h3 class="card-title mb-0">PAYMENT DOCUMENT DETAILS</h3>
                    </div>
                    <!--Binance Pay section start-->
                    <div class="card-body pl-3 pr-3 pb-3 pt-0 binance">
                        <div class="row mt-1 flds">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <dt class="col-3 cpl _bold">
                                        Account Name:<small class="pl-1 doc_input_txt"></small>
                                    </dt>
                                    <dd class="col-6 p-0 m-0"><input type="text"
                                            name="binance_account_name" class="form-control"
                                            placeholder="Binance Account Name" data-old=""
                                            value="">
                                    </dd>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1 flds">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <dt class="col-3 cpl _bold">
                                        Email: <small class="pl-1 doc_input_txt"></small>
                                    </dt>
                                    <dd class="col-6 p-0 m-0"><input type="text"
                                            name="binance_email" class="form-control"
                                            placeholder="Binance Email" data-old=""
                                            value="">
                                    </dd>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1 flds">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <dt class="col-3 cpl _bold">
                                        Customer Id: <small class="pl-1 doc_input_txt"></small>
                                    </dt>
                                    <dd class="col-6 p-0 m-0"><input type="text"
                                            name="Binance_customer_id" class="form-control"
                                            placeholder="Binance Customer Id" data-old=""
                                            value="">
                                    </dd>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Binance Pay section end-->

                    <!--Skrill section start-->
                    <div class="card-body pl-3 pr-3 pb-3 pt-0 skrill">
                        <div class="row mt-1 flds">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <dt class="col-3 cpl _bold">
                                        Account Name:<small class="pl-1 doc_input_txt"></small>
                                    </dt>
                                    <dd class="col-6 p-0 m-0"><input type="text"
                                            name="skrill_account_name" class="form-control"
                                            placeholder="Skrill Account Name" data-old=""
                                            value="">
                                    </dd>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1 flds">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <dt class="col-3 cpl _bold">
                                        Email: <small class="pl-1 doc_input_txt"></small>
                                    </dt>
                                    <dd class="col-6 p-0 m-0"><input type="text"
                                            name="skrill_email" class="form-control"
                                            placeholder="Skrill Email" data-old=""
                                            value="">
                                    </dd>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1 flds">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <dt class="col-3 cpl _bold">
                                        Customer Id: <small class="pl-1 doc_input_txt"></small>
                                    </dt>
                                    <dd class="col-6 p-0 m-0"><input type="text"
                                            name="skrill_customer_id" class="form-control"
                                            placeholder="Skrill Customer Id" data-old=""
                                            value="">
                                    </dd>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Skrill section end-->

                    <!--Neteller section start-->
                    <div class="card-body pl-3 pr-3 pb-3 pt-0 neteller">
                        <div class="row mt-1 flds">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <dt class="col-3 cpl _bold">
                                        Account Name:<small class="pl-1 doc_input_txt"></small>
                                    </dt>
                                    <dd class="col-6 p-0 m-0"><input type="text"
                                            name="neteller_account_name" class="form-control"
                                            placeholder="Neteller Account Name" data-old=""
                                            value="">
                                    </dd>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1 flds">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <dt class="col-3 cpl _bold">
                                        Email: <small class="pl-1 doc_input_txt"></small>
                                    </dt>
                                    <dd class="col-6 p-0 m-0"><input type="text"
                                            name="neteller_email" class="form-control"
                                            placeholder="Neteller Email" data-old=""
                                            value="">
                                    </dd>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1 flds">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <dt class="col-3 cpl _bold">
                                        Customer Id: <small class="pl-1 doc_input_txt"></small>
                                    </dt>
                                    <dd class="col-6 p-0 m-0"><input type="text"
                                            name="neteller_customer_id" class="form-control"
                                            placeholder="Neteller Customer Id" data-old=""
                                            value="">
                                    </dd>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Neteller section end-->
                </div>
            </div>
            <div class="row mt-3 submit_doc_div">
                <div class="col-12" style="display: flex;justify-content: center;">
                    <input type="hidden" id="form_type" value="" />
                    <input type="hidden" id="doc_type" value="" />
                    <button type="button" class="btn btn-xs theme-btn mr-2  "
                        onclick="do_submit_dynamic(this)">Check Out</button>
                </div>
            </div>
        </div>
    </form>
</div>