@extends('layouts.app')
@section('title','Generate Letter')

@section('content')
    <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet" />
    <style>
        #datatable_wrapper .row {
            margin-top: 10px !important;
        }

        .hd-label {
            font-weight: bold;
            font-size: .9rem;
            color: #333;
            margin-bottom: 10px;
        }
    </style>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Generate Doctor Letter</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
{{--                            <h6 class="card-title mb-0">Doctor Letter</h6>--}}
                        </div>
                        <div style="margin-top: 20px;">
                            <label class="hd-label" for="">Introduction</label>
                            <div id="editor">
                                <p>
                                    @if(isset($dataset->introduction))
                                        <?= $dataset->introduction ?>
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto aut autem consectetur consequuntur deleniti dicta dolorum earum est eveniet ex excepturi exercitationem facilis id illo in incidunt, ipsa iusto laboriosam maiores, minus, natus nulla numquam officiis optio placeat quas repellat sunt tempore tenetur totam unde velit veritatis vero voluptas.
                                    @endif
                                </p>
                            </div>
                            <div class="mt-3" style="text-align: right;">
                                <button class="btn btn-secondary">Request Information</button>
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <label class="hd-label" for="">Diagnosis</label>
                            <div id="editor2">
                                <p>
                                    @if(isset($dataset->diagnosis))
                                        <?= $dataset->diagnosis ?>
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto aut autem consectetur consequuntur deleniti dicta dolorum earum est eveniet ex excepturi exercitationem facilis id illo in incidunt, ipsa iusto laboriosam maiores, minus, natus nulla numquam officiis optio placeat quas repellat sunt tempore tenetur totam unde velit veritatis vero voluptas.
                                    @endif
                                </p>
                            </div>
                            <div class="mt-3" style="text-align: right;">
                                <button class="btn btn-secondary">Request Information</button>
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <label class="hd-label" for="">Anamnesis</label>
                            <div id="editor3">
                                <p>
                                    @if(isset($dataset->anamnesis))
                                        <?= $dataset->anamnesis ?>
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto aut autem consectetur consequuntur deleniti dicta dolorum earum est eveniet ex excepturi exercitationem facilis id illo in incidunt, ipsa iusto laboriosam maiores, minus, natus nulla numquam officiis optio placeat quas repellat sunt tempore tenetur totam unde velit veritatis vero voluptas.
                                    @endif
                                </p>
                            </div>
                            <div class="mt-3" style="text-align: right;">
                                <button class="btn btn-secondary">Request Information</button>
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <label class="hd-label" for="">Findings of physical examination</label>
                            <div id="editor4">
                                <p>
                                    @if(isset($dataset->physical_examination))
                                        <?= $dataset->anamnesis ?>
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto aut autem consectetur consequuntur deleniti dicta dolorum earum est eveniet ex excepturi exercitationem facilis id illo in incidunt, ipsa iusto laboriosam maiores, minus, natus nulla numquam officiis optio placeat quas repellat sunt tempore tenetur totam unde velit veritatis vero voluptas.
                                    @endif
                                </p>
                            </div>
                            <div class="mt-3" style="text-align: right;">
                                <button class="btn btn-secondary">Request Information</button>
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <label class="hd-label" for="">Diagnosis/Diagnostics</label>
                            <div id="editor5">
                                <p>
                                    @if(isset($dataset->diagnostics))
                                        <?= $dataset->diagnostics ?>
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto aut autem consectetur consequuntur deleniti dicta dolorum earum est eveniet ex excepturi exercitationem facilis id illo in incidunt, ipsa iusto laboriosam maiores, minus, natus nulla numquam officiis optio placeat quas repellat sunt tempore tenetur totam unde velit veritatis vero voluptas.
                                    @endif
                                </p>
                            </div>
                            <div class="mt-3" style="text-align: right;">
                                <button class="btn btn-secondary">Request Information</button>
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <label class="hd-label" for="">Epicrisis /Summary</label>
                            <div id="editor6">
                                <p>
                                    @if(isset($dataset->summary))
                                        <?= $dataset->summary ?>
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto aut autem consectetur consequuntur deleniti dicta dolorum earum est eveniet ex excepturi exercitationem facilis id illo in incidunt, ipsa iusto laboriosam maiores, minus, natus nulla numquam officiis optio placeat quas repellat sunt tempore tenetur totam unde velit veritatis vero voluptas.
                                    @endif
                                </p>
                            </div>
                            <div class="mt-3" style="text-align: right;">
                                <button class="btn btn-secondary">Request Information</button>
                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <label class="hd-label" for="">Therapy recommendation/medication</label>
                            <div id="editor7">
                                <p>
                                    @if(isset($dataset->medication))
                                        <?= $dataset->medication ?>
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto aut autem consectetur consequuntur deleniti dicta dolorum earum est eveniet ex excepturi exercitationem facilis id illo in incidunt, ipsa iusto laboriosam maiores, minus, natus nulla numquam officiis optio placeat quas repellat sunt tempore tenetur totam unde velit veritatis vero voluptas.
                                    @endif
                                </p>
                            </div>
                            <div class="mt-3" style="text-align: right;">
                                <button class="btn btn-secondary">Request Information</button>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary submitLetter">Create Doctor's Letter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->

    <form action="{{ url('save-letter') }}" method="post" id="letterForm">
        @csrf
        <input type="hidden" name="id" value="{{ $patient_id }}">
        <input type="hidden" name="introduction" id="introduction" value="">
        <input type="hidden" name="Summary" id="Summary" value="">
        <input type="hidden" name="diagnosis" id="diagnosis" value="">
        <input type="hidden" name="anamnesis" id="anamnesis" value="">
        <input type="hidden" name="physical_examination" id="physical_examination" value="">
        <input type="hidden" name="diagnostics" id="diagnostics" value="">
        <input type="hidden" name="medication" id="medication" value="">
    </form>
@endsection

@push('script')
    <!-- Include stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        let editor = new Quill('#editor', {
            //modules: { toolbar: '#toolbar' },
            theme: 'snow',
        });

        // let editor1 = new Quill('#editor1', {
        //     //modules: { toolbar: '#toolbar1' },
        //     theme: 'snow',
        // });

        let editor2 = new Quill('#editor2', {
            //modules: { toolbar: '#toolbar1' },
            theme: 'snow',
        });

        let editor3 = new Quill('#editor3', {
            //modules: { toolbar: '#toolbar1' },
            theme: 'snow',
        });

        let editor4 = new Quill('#editor4', {
            //modules: { toolbar: '#toolbar1' },
            theme: 'snow',
        });

        let editor5 = new Quill('#editor5', {
            //modules: { toolbar: '#toolbar1' },
            theme: 'snow',
        });

        let editor6 = new Quill('#editor6', {
            //modules: { toolbar: '#toolbar1' },
            theme: 'snow',
        });

        let editor7 = new Quill('#editor7', {
            //modules: { toolbar: '#toolbar1' },
            theme: 'snow',
        });

        $('.submitLetter').click(function () {
            $('#introduction').val(editor.root.innerHTML)
            $('#Summary').val(editor6.root.innerHTML)
            $('#diagnosis').val(editor2.root.innerHTML)
            $('#anamnesis').val(editor3.root.innerHTML)
            $('#physical_examination').val(editor4.root.innerHTML)
            $('#diagnostics').val(editor5.root.innerHTML)
            $('#medication').val(editor7.root.innerHTML)
            $('#letterForm').submit();
        })
    </script>
@endpush
