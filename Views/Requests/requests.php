<div class="container">
    <div class="wrapper">

        <nav>
            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-pending-tab" data-bs-toggle="tab" data-bs-target="#nav-pending" type="button" role="tab" aria-controls="nav-pending" aria-selected="true">Pending</button>
                <button class="nav-link" id="nav-accepted-tab" data-bs-toggle="tab" data-bs-target="#nav-accepted" type="button" role="tab" aria-controls="nav-accepted" aria-selected="false">Accepted</button>
                <button class="nav-link" id="nav-rejected-tab" data-bs-toggle="tab" data-bs-target="#nav-rejected" type="button" role="tab" aria-controls="nav-rejected" aria-selected="false">Rejected</button>
            </div>
        </nav>


        <div class="tab-content" id="nav-tabContent">
            <!-- Pending -->
            <div class="tab-pane fade show active" id="nav-pending" role="tabpanel" aria-labelledby="nav-pending-tab">

                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Request 1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- req -->
                                <div class="row">
                                    <form>
                                        <div class="second d-flex flex-row mt-2">
                                            <div class="image mr-3">
                                                <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="70" />
                                            </div>
                                            <div class="">
                                                <div class="d-flex flex-row">
                                                    <span class="name">&nbsp;&nbsp;1 Name of the employee</span>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Request 2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- req -->
                                <div class="row">
                                    <form>
                                        <div class="second d-flex flex-row mt-2">
                                            <div class="image mr-3">
                                                <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="70" />
                                            </div>
                                            <div class="">
                                                <div class="d-flex flex-row">
                                                    <span class="name">&nbsp;&nbsp;1 Name of the employee</span>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            <!-- Accepted -->
            <div class="tab-pane fade" id="nav-accepted" role="tabpanel" aria-labelledby="nav-accepted-tab">

                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Request 1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- req -->
                                <div class="row">
                                    <form>
                                        <div class="second d-flex flex-row mt-2">
                                            <div class="image mr-3">
                                                <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="70" />
                                            </div>
                                            <div class="">
                                                <div class="d-flex flex-row">
                                                    <span class="name">&nbsp;&nbsp;1 Name of the employee</span>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Rejected -->
            <div class="tab-pane fade" id="nav-rejected" role="tabpanel" aria-labelledby="nav-rejected-tab">

                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Request 1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- req -->
                                <div class="row">
                                    <form>
                                        <div class="second d-flex flex-row mt-2">
                                            <div class="image mr-3">
                                                <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="70" />
                                            </div>
                                            <div class="">
                                                <div class="d-flex flex-row">
                                                    <span class="name">&nbsp;&nbsp;1 Name of the employee</span>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Request 2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- req -->
                                <div class="row">
                                    <form>
                                        <div class="second d-flex flex-row mt-2">
                                            <div class="image mr-3">
                                                <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="70" />
                                            </div>
                                            <div class="">
                                                <div class="d-flex flex-row">
                                                    <span class="name">&nbsp;&nbsp;1 Name of the employee</span>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Request 3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- req -->
                                <div class="row">
                                    <form>
                                        <div class="second d-flex flex-row mt-2">
                                            <div class="image mr-3">
                                                <img src="https://i.imgur.com/0LKZQYM.jpg" class="rounded-circle" width="70" />
                                            </div>
                                            <div class="">
                                                <div class="d-flex flex-row">
                                                    <span class="name">&nbsp;&nbsp;1 Name of the employee</span>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <span class="info">&nbsp;&nbsp;&nbsp;User ID: 0001, Request ID: 0001</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <p class="data-title">Leave Type :
                                                    <span class="data">&nbsp;No-Pay</span>
                                                </p>
                                                <p class="data-title">No. of Days :
                                                    <span class="data">&nbsp;2</span>
                                                </p>
                                                <p class="data-title">Leave Date :
                                                    <span class="data">&nbsp;01/07/2022</span>
                                                </p>
                                                <p class="data-title">Return Date :
                                                    <span class="data">&nbsp;03/07/2022</span>
                                                </p>
                                                <p class="data-title">Reason for the leave:
                                                    <span class="data">&nbsp;reason</span>
                                                </p>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Reason</label>
                                                    <textarea class="form-control" placeholder="Tytpe something here" id="reason"></textarea>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button class="btn btn-success" type="button">Accept</button>
                                                    <button class="btn btn-danger" type="button">Reject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>