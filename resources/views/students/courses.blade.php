@extends('layout')

@section('title')
<div class="container">
<h1>Courses</h1>
</div>
@endsection

@section('content')
    <div class="container">
    <div class="course-btn mb-3">
        <a href="{{ route('course.create') }}" class="btn btn-primary">Add new</a>
    </div>
    <div class="row gap-4 mb-5 text-center">
        @foreach ($courses as $course)
            <div class="col-md-12">
                <div class="card p-4 shadow-sm rounded-3 border-0">
                    <ul class="list-unstyled">
                        <li>
                            <h3 style="color: #5bbd2a">{{ $course->course_name }}</h3>
                        </li>
                        <li>
                            <h6><b style="color: #ff48a4">Duration: </b>{{ $course->duration }}</h6>
                        </li>
                        <li>
                            <h6><b style="color: #9d60ff">Summary: </b>{{ $course->summary }}</h6>
                        </li>
                    </ul>
                    <p>{!! $course->detail !!}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection




@section('content')
<div class="row">
    <div class="course-btn mb-3">
        <a href="{{ route('course.create') }}" class="btn btn-primary">Add new</a>
    </div>
    <div class="col-md-6">
        {{-- Table One --}}
        <h4 class="p-2 text-center text-white" style="background: #1d96b2">Multimedia and Graphics Design</h4>
        <table class="table table-hover table-striped" style="width: 100%">
            <tr>
                <td><strong style="color: #ff5722">Graphic Design:</strong> Photoshop, Illustrator, CorelDRAW
                </td>
            </tr>
            <tr>
                <td><strong style="color: #9d60ff">Video Editing:</strong> Premiere Pro, Final Cut Pro, After
                    Effects</td>
            </tr>
            <tr>
                <td><strong style="color: #ff48a4">3D Modeling:</strong> 3D Studio Max, Blender, Maya</td>
            </tr>
            <tr>
                <td><strong style="color: #5bbd2a">Animation:</strong> 2D animation, 3D animation, motion
                    graphics</td>
            </tr>
        </table>

        {{-- Table two add running --}}
        <h4 class="p-2 text-center text-white" style="background: #1d96b2"> Artificial Intelligence and Machine
            Learning
        </h4>
        <table class="table table-hover table-striped">
            <tr>
                <td><strong style="color: #ff5722">Machine Learning:</strong> Supervised learning, unsupervised
                    learning, clustering</td>
            </tr>
            <tr>
                <td><strong style="color: #9d60ff">Deep Learning:</strong> Neural networks, convolutional neural
                    networks, RNN</td>
            </tr>
            <tr>
                <td><strong style="color: #ff48a4">Natural Language Processing (NLP):</strong> Text processing,
                    NLP
                    toolkit, language modeling</td>
            </tr>
            <tr>
                <td><strong style="color: #5bbd2a">Data Preprocessing:</strong> Data cleaning, feature
                    selection, data
                    scaling</td>
            </tr>
        </table>
        {{-- Table three add running done --}}
        <h4 class="p-2 text-center text-white" style="background: #1d96b2">Computer Science and Engineering</h4>
        <table class="table table-hover table-striped">
            <tr>
                <td><strong style="color: #ff5722">Computer Architecture:</strong> Computer structure, memory
                    management, processor design</td>
            </tr>
            <tr>
                <td><strong style="color: #9d60ff">Algorithms:</strong> Sorting and searching algorithms, graph
                    theory, dynamic programming</td>
            </tr>
            <tr>
                <td><strong style="color: #ff48a4">Data Structures:</strong> Arrays, linked lists, stacks,
                    queues, trees, and graphs</td>
            </tr>
            <tr>
                <td><strong style="color: #5bbd2a">Database Systems:</strong> Relational databases, SQL,
                    database normalization, NoSQL databases</td>
            </tr>
            <tr>
                <td><strong style="color: #ff5722">Networking:</strong> OSI model, TCP/IP, network topology,
                    security protocols</td>
            </tr>
            <tr>
                <td><strong style="color: #9d60ff">Operating Systems:</strong> Process management, threading,
                    memory management, file systems</td>
            </tr>
            <tr>
                <td><strong style="color: #ff48a4">Cyber Security:</strong> Encryption, access control, malware
                    analysis, network security</td>
            </tr>
        </table>

    </div>
    <div class="col-md-6">
        {{-- Table four --}}
        <h4 class="p-2 text-center text-white" style="background: #1d96b2">Software Engineering</h4>
        <table class="table table-hover table-striped">
            <tr>
                <td><strong style="color: #ff5722">Software Development Life Cycle (SDLC):</strong> Requirements
                    analysis, design, coding, testing, maintenance</td>
            </tr>
            <tr>
                <td><strong style="color: #9d60ff">Project Management:</strong> Agile methodology, Scrum, Kanban
                </td>
            </tr>
            <tr>
                <td><strong style="color: #ff48a4">Quality Assurance and Testing:</strong> Unit testing, system
                    testing,
                    bug tracking</td>
            </tr>
            <tr>
                <td><strong style="color: #5bbd2a">Version Control Systems:</strong> Git, GitHub, Bitbucket</td>
            </tr>
            <tr>
                <td><strong style="color: #ff5722">Object-Oriented Design:</strong> Classes, objects,
                    inheritance,
                    polymorphism</td>
            </tr>
        </table>
        {{-- Table five --}}
        <h4 class="p-2 text-center text-white" style="background: #1d96b2">Information and Communication
            Technology
            (ICT)</h4>
        <table class="table table-hover table-striped">
            <tr>
                <td><strong style="color: #ff5722">Computer Basics:</strong> Hardware, software, computer
                    networks</td>
            </tr>
            <tr>
                <td><strong style="color: #9d60ff">Web Development:</strong> HTML, CSS, JavaScript, PHP,
                    WordPress</td>
            </tr>
            <tr>
                <td><strong style="color: #ff48a4">Programming Languages:</strong> Python, Java, C++, C#</td>
            </tr>
            <tr>
                <td><strong style="color: #5bbd2a">Data Science:</strong> Data cleaning, data analysis, machine
                    learning
                    basics</td>
            </tr>
            <tr>
                <td><strong style="color: #ff5722">Internet of Things (IoT):</strong> Sensors, device
                    interconnection,
                    smart applications</td>
            </tr>
        </table>
        {{-- Table six --}}
        <h4 class="p-2 text-center text-white" style="background: #1d96b2">Data Analytics</h4>
        <table class="table table-hover table-striped">
            <tr>
                <td><strong style="color: #ff5722">Statistical Analysis:</strong> Descriptive and inferential
                    statistics, hypothesis testing, regression analysis</td>
            </tr>
            <tr>
                <td><strong style="color: #9d60ff">Data Visualization:</strong> Tools like Tableau, Power BI, and
                    Matplotlib; storytelling with data</td>
            </tr>
            <tr>
                <td><strong style="color: #ff48a4">Big Data Technologies:</strong> Hadoop, Spark, distributed computing
                    concepts</td>
            </tr>
            <tr>
                <td><strong style="color: #5bbd2a">Business Intelligence:</strong> Key performance indicators (KPIs),
                    reporting, data warehousing</td>
            </tr>
            <tr>
                <td><strong style="color: #ff5722">Business Intelligence:</strong> Key performance indicators (KPIs),
                    reporting, data warehousing</td>
            </tr>
        </table>
    </div>
</div>
@endsection

@push('style')
<style>
    /* .table-striped > tbody > tr:nth-of-type(odd) > * {
                        background: #b1bdb3 !important;
                        color: #464748;
                      } */
    table tr {
        font-size: 16px;
        /* background: #eaf8e5 !important; */
    }

    /* table {
                        margin-bottom: 50px !important;
                       } */
</style>
@endpush
