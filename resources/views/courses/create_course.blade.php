@extends('layout')

@section('title')
    <h4 class="text-center">Add Course</h4>
@endsection

@section('content')
    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <div>
                @if (session('success'))
                    <p style="background: #d4edda; text-align: center">{{ session('success') }}</p>
                @endif
            </div>
            <form action="{{ route('course.store') }}" method="POST" class="card pt-5 pb-4 px-4" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="CourseName">Course Name</label>
                    <input type="text" class="form-control" name="course_name"
                        placeholder="Course name" value="{{old('coursr_name')}}">
                    @error('course_name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" name="duration"
                        placeholder="Duration" value="{{old('duration')}}">
                    @error('duration')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="summary">Summary</label>
                    <input type="text" class="form-control" name="summary"
                        placeholder="Summary" value="{{old('summary')}}">
                    @error('summary')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-4">
                        <textarea name="description" id="description" cols="30" rows="5" placeholder="Description" class="form-control" value="{{old('description')}}"></textarea>
                    @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
                <div class="mt-4">
                    <a href="{{ route('course') }}">&#8592; Back</a>
                </div>

            </form>
        </div>
    @endsection

    @push('scripts')
    <script>
        tinymce.init({
          selector: 'textarea',
          height: 300,
          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });

//         tinymce.init({
//     selector: 'textarea',
//     plugins: 'print',
//     toolbar: 'print',
// });

//         function getTextContent() {
//     const editorContent = tinymce.get('textarea_id').getContent({ format: 'text' });
//     console.log(editorContent); // Ekhane sudhu text chara output paben
// }

// tinymce.init({
//     selector: 'textarea',
//     plugins: 'print',
//     toolbar: 'print',
//     forced_root_block: false,// custom style chara shudhu text output
//     formats: { 
//         removeformat: [
//             { selector: '*', inline: 'none', attributes: ['style'], remove: 'all', split: true, expand: false, deep: true }
//         ]
//     }
// });

// tinymce.init({
//     selector: 'textarea',
//     inline: true, // Inline mode e set kore
//     plugins: 'print',
//     toolbar: 'print',
//     forced_root_block: '', // Empty kore dile kono block element wrap hobe na
// });

// function saveContent() {
//     const editorContent = tinymce.get('description').getContent({ format: 'text' });
//     // ekhane editorContent sudhu text dhore rakhe
//     // Database e ei editorContent pass korben
//     // console.log(editorContent); // Dekhte paren sudhu text pachen kina
// }
// saveContent();
      </script>
    @endpush
   
