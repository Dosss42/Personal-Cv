<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cyron B. Maducdoc | BSIT Graduate | Web Developer CV</title>
        <meta name="description" content="Online CV of Cyron B. Maducdoc , a BSIT graduate from the Philippines seeking an entry-level opportunity in web development, software development, or related IT roles.">

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-gray-900 antialiased">
        {{-- Sticky navigation --}}
        <nav class="sticky top-0 z-50 border-b border-gray-200 bg-white/95 backdrop-blur print:hidden">
            <div class="mx-auto flex max-w-3xl items-center justify-between px-4 py-3 sm:px-6">
                <a href="#top" class="text-sm font-semibold tracking-tight text-gray-900">CBM</a>

                <div id="nav-menu" class="hidden absolute inset-x-0 top-full flex-col gap-1 border-b border-gray-200 bg-white px-4 py-3 sm:static sm:flex sm:flex-row sm:items-center sm:gap-6 sm:border-0 sm:bg-transparent sm:px-0 sm:py-0">
                    <a href="#about" class="rounded px-2 py-1.5 text-sm text-gray-600 hover:text-blue-600 sm:px-0 sm:py-0">About</a>
                    <a href="#skills" class="rounded px-2 py-1.5 text-sm text-gray-600 hover:text-blue-600 sm:px-0 sm:py-0">Skills</a>
                    <a href="#projects" class="rounded px-2 py-1.5 text-sm text-gray-600 hover:text-blue-600 sm:px-0 sm:py-0">Projects</a>
                    <a href="#education" class="rounded px-2 py-1.5 text-sm text-gray-600 hover:text-blue-600 sm:px-0 sm:py-0">Education</a>
                    <a href="#certifications" class="rounded px-2 py-1.5 text-sm text-gray-600 hover:text-blue-600 sm:px-0 sm:py-0">Certifications</a>
                    <a href="#contact" class="rounded px-2 py-1.5 text-sm text-gray-600 hover:text-blue-600 sm:px-0 sm:py-0">Contact</a>
                    {{-- TODO: replace with the actual path to your CV PDF, e.g. asset('cv.pdf') --}}
                    <a href="#" download class="mt-1 inline-flex items-center justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-medium text-white hover:bg-blue-700 sm:mt-0">Download CV</a>
                </div>

                <button id="nav-toggle" type="button" aria-controls="nav-menu" aria-expanded="false" class="sm:hidden" aria-label="Toggle navigation menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
                    </svg>
                </button>
            </div>
        </nav>

        <main class="mx-auto max-w-3xl px-4 sm:px-6">
            {{-- Header / Profile --}}
            <header id="top" class="scroll-mt-16 py-10 sm:py-12">
                <div class="flex flex-col items-start gap-5 sm:flex-row sm:items-center">
                    {{-- Profile photo placeholder — replace with an <img> tag when ready --}}
                    <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full border-2 border-dashed border-gray-100 text-center text-[10px] leading-tight text-gray-400">
                        <img src="{{ asset('img/2x2.png') }}" alt="Description of image">
                    </div>

                    <div>
                        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Cyron B. Maducdoc </h1>
                        <p class="mt-1 text-base font-medium text-blue-600">BSIT Graduate | Aspiring Full Stack Web Developer</p>

                        <div class="mt-3 flex flex-wrap items-center gap-x-4 gap-y-1 text-sm text-gray-600">
                            <span>General Tinio Nueva Ecija, Philippines |</span>
                            <a href="mailto:cyronmaducdoc2@gmail.com" class="hover:text-blue-600">cyronmaducdoc2@gmail.com |</a>
                            <a href="tel:09613488566" class="hover:text-blue-600">09613488566 |</a>
                            <a href="https://github.com/Dosss42" target="_blank" rel="noopener" class="hover:text-blue-600">GitHub |</a>
                            <a href="https://www.linkedin.com/in/cyron-maducdoc-7023241b8/?isSelfProfile=true" target="_blank" rel="noopener" class="hover:text-blue-600">LinkedIn |</a>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex flex-wrap gap-3 print:hidden">
                    {{-- TODO: replace with the actual path to your CV PDF, e.g. asset('cv.pdf') --}}
                    <a href="#" download class="inline-flex items-center rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">Download CV</a>
                    <a href="#contact" class="inline-flex items-center rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:border-gray-400">Contact Me</a>
                </div>
            </header>

            {{-- Professional Summary --}}
            <section id="about" class="scroll-mt-16 border-t border-gray-200 py-8">
                <h2 class="text-lg font-semibold text-gray-900">Professional Summary</h2>
                <p class="mt-3 max-w-2xl text-sm leading-relaxed text-gray-700">
                    BSIT graduate with a focus on web development and hands-on experience building academic and personal web applications. Familiar with frontend development, backend programming, REST APIs, databases, authentication, and Git-based development workflows. Currently looking for an entry-level opportunity where I can apply what I've learned, keep growing as a developer, and contribute to real projects.
                </p>
            </section>

            {{-- Technical Skills --}}
            <section id="skills" class="scroll-mt-16 border-t border-gray-200 py-8">
                <h2 class="text-lg font-semibold text-gray-900">Technical Skills</h2>

                <div class="mt-4 grid gap-5 sm:grid-cols-2">
                    <div>
                        <h3 class="text-xs font-semibold uppercase tracking-wide text-gray-500">Frontend</h3>
                        <div class="mt-2 flex flex-wrap gap-1.5">
                            @foreach (['HTML5', 'CSS3', 'JavaScript', 'TypeScript', 'React', 'Angular', 'Bootstrap', 'Tailwind CSS'] as $skill)
                                <span class="rounded-full border border-gray-200 bg-gray-50 px-2.5 py-1 text-xs text-gray-700">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xs font-semibold uppercase tracking-wide text-gray-500">Backend</h3>
                        <div class="mt-2 flex flex-wrap gap-1.5">
                            @foreach (['PHP', 'Laravel', 'Node.js', 'Python', 'Flask'] as $skill)
                                <span class="rounded-full border border-gray-200 bg-gray-50 px-2.5 py-1 text-xs text-gray-700">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xs font-semibold uppercase tracking-wide text-gray-500">Database</h3>
                        <div class="mt-2 flex flex-wrap gap-1.5">
                            @foreach (['MySQL', 'SQL', 'CRUD', 'Database Design', 'Database Normalization'] as $skill)
                                <span class="rounded-full border border-gray-200 bg-gray-50 px-2.5 py-1 text-xs text-gray-700">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xs font-semibold uppercase tracking-wide text-gray-500">Content Management System(CMS)</h3>
                        <div class="mt-2 flex flex-wrap gap-1.5">
                            @foreach (['Wordpress', 'Wix', 'Google Sites', 'drupal', 'Joomla'] as $skill)
                                <span class="rounded-full border border-gray-200 bg-gray-50 px-2.5 py-1 text-xs text-gray-700">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>


                    <div>
                        <h3 class="text-xs font-semibold uppercase tracking-wide text-gray-500">Tools &amp; Development</h3>
                        <div class="mt-2 flex flex-wrap gap-1.5">
                            @foreach (['Git', 'GitHub', 'XAMPP', 'WAMP', 'VS Code', 'Docker'] as $skill)
                                <span class="rounded-full border border-gray-200 bg-gray-50 px-2.5 py-1 text-xs text-gray-700">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Core Competencies --}}
                <h3 class="mt-6 text-xs font-semibold uppercase tracking-wide text-gray-500">Core Competencies</h3>
                <ul class="mt-2 grid grid-cols-2 gap-x-4 gap-y-1.5 text-sm text-gray-700 sm:grid-cols-3">
                    @foreach ([
                        'Web Application Development',
                        'Responsive Web Design',
                        'CRUD Operations',
                        'REST API Integration',
                        'Database Management',
                        'Authentication & Authorization',
                        'Debugging',
                        'Problem Solving',
                        'Git Version Control',
                        'Basic Deployment',
                        'Technical Troubleshooting',
                    ] as $competency)
                        <li class="flex items-start gap-1.5">
                            <span class="mt-1.5 h-1 w-1 shrink-0 rounded-full bg-blue-600"></span>
                            <span>{{ $competency }}</span>
                        </li>
                    @endforeach
                </ul>
            </section>

            {{-- Projects / Practical Experience --}}
            <section id="projects" class="scroll-mt-16 border-t border-gray-200 py-8">
                <h2 class="text-lg font-semibold text-gray-900">Projects &amp; Practical Experience</h2>

                {{-- Featured capstone project --}}
                <div class="mt-4 rounded-lg border border-gray-200 p-5">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-700">Academic Capstone Project</span>
                        <span class="text-xs text-gray-500">Role: Full Stack Developer</span>
                    </div>

                    <h3 class="mt-2 text-base font-semibold text-gray-900">Web-Based Online Enrollment, Student Information, and Academic Record Management System</h3>

                    <p class="mt-2 text-sm leading-relaxed text-gray-700">
                        A web-based school management system designed to support student enrollment, student information management, academic records, payments, and administrative workflows.
                    </p>

                    <p class="mt-3 text-xs text-gray-500">
                        <span class="font-medium text-gray-700">Technologies:</span> PHP • Laravel • MySQL • HTML • CSS • JavaScript • Bootstrap 
                    </p>

                    <ul class="mt-3 space-y-1 text-sm text-gray-700">
                        <li class="flex items-start gap-1.5"><span class="mt-1.5 h-1 w-1 shrink-0 rounded-full bg-blue-600"></span><span>Built student enrollment and academic records modules with role-based access.</span></li>
                        <li class="flex items-start gap-1.5"><span class="mt-1.5 h-1 w-1 shrink-0 rounded-full bg-blue-600"></span><span>Implemented authentication and payment processing workflows.</span></li>
                        <li class="flex items-start gap-1.5"><span class="mt-1.5 h-1 w-1 shrink-0 rounded-full bg-blue-600"></span><span>Designed the database schema and handled CRUD operations across modules.</span></li>
                        <li class="flex items-start gap-1.5"><span class="mt-1.5 h-1 w-1 shrink-0 rounded-full bg-blue-600"></span><span>Integrated reporting for administrative record management.</span></li>
                    </ul>

                    {{-- TODO: only show these links if the project is actually published --}}
                    <div class="mt-4 flex gap-4 text-sm font-medium">
                        <a href="#" class="text-blue-600 hover:text-blue-700">View Project ↗</a>
                        <a href="#" class="text-blue-600 hover:text-blue-700">GitHub ↗</a>
                    </div>
                </div>

                {{-- Other projects --}}
                <div class="mt-4 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-lg border border-gray-200 p-4">
                        <h3 class="text-sm font-semibold text-gray-900">Student Management System</h3>
                        <p class="mt-1 text-xs text-gray-500">Angular • TypeScript • PHP • MySQL</p>
                        <p class="mt-2 text-sm text-gray-700">CRUD-based student management application demonstrating frontend development, API communication, routing, and database operations.</p>
                        <a href="#" class="mt-3 inline-block text-sm font-medium text-blue-600 hover:text-blue-700">GitHub ↗</a>
                    </div>

                    <div class="rounded-lg border border-gray-200 p-4">
                        <h3 class="text-sm font-semibold text-gray-900">Smart Quiz System</h3>
                        <p class="mt-1 text-xs text-gray-500">Python • Flask • MySQL</p>
                        <p class="mt-2 text-sm text-gray-700">Web-based quiz application developed to practice backend development, database integration, and application logic.</p>
                        <a href="#" class="mt-3 inline-block text-sm font-medium text-blue-600 hover:text-blue-700">GitHub ↗</a>
                    </div>

                    <div class="rounded-lg border border-gray-200 p-4">
                        <h3 class="text-sm font-semibold text-gray-900">CampusEats</h3>
                        <p class="mt-1 text-xs text-gray-500">Angular • Ionic • TypeScript • REST API</p>
                        <p class="mt-2 text-sm text-gray-700">Campus food ordering application demonstrating menu management, cart functionality, order processing, and API communication.</p>
                        <a href="#" class="mt-3 inline-block text-sm font-medium text-blue-600 hover:text-blue-700">GitHub ↗</a>
                    </div>
                </div>
            </section>

            {{-- Education --}}
            <section id="education" class="scroll-mt-16 border-t border-gray-200 py-8">
                <h2 class="text-lg font-semibold text-gray-900">Education</h2>

                <div class="mt-4">
                    <h3 class="text-base font-semibold text-gray-900">Bachelor of Science in Information Technology</h3>
                    <p class="text-sm text-gray-700">Major / Focus: Web System Technology</p>
                    <p class="mt-1 text-sm text-gray-500">NEUST- Papaya off-campus · General Tinio, Nueva Ecija, Philippines · 2027</p>

                    <div class="mt-3 flex flex-wrap gap-1.5">
                        @foreach (['Web Development', 'Programming', 'Database Management', 'CMS', 'Computer Servicing'] as $area)
                            <span class="rounded-full border border-gray-200 bg-gray-50 px-2.5 py-1 text-xs text-gray-700">{{ $area }}</span>
                        @endforeach
                    </div>
                </div>


                <div class="mt-4">
                    <h3 class="text-base font-semibold text-gray-900">Senior HighSchool</h3>
                    <p class="text-sm text-gray-700">Major / Focus: TVL-ICT</p>
                    <p class="mt-1 text-sm text-gray-500">General Tinio National Highschool · General Tinio, Nueva Ecija, Philippines · 2023</p>

                </div>


                <div class="mt-4">
                    <h3 class="text-base font-semibold text-gray-900">Junior HighSchool</h3>
                    <p class="text-sm text-gray-700">Major / Focus: SP-ICT</p>
                    <p class="mt-1 text-sm text-gray-500">General Tinio National Highschool · General Tinio, Nueva Ecija, Philippines · 2021</p>

                </div>


                <div class="mt-4">
                    <h3 class="text-base font-semibold text-gray-900">Elementary</h3>
                    <p class="mt-1 text-sm text-gray-500">Iemelif Learning Center · General Tinio, Nueva Ecija, Philippines · 2017</p>

                </div>


            </section>

            

            {{-- Certifications --}}
            <section id="certifications" class="scroll-mt-16 border-t border-gray-200 py-8">
                <h2 class="text-lg font-semibold text-gray-900">Certifications</h2>

                <ul class="mt-4 divide-y divide-gray-200">
                    <li class="py-3">
                        <p class="text-sm font-medium text-gray-900">National Certificate II in Computer Systems Servicing</p>
                        <p class="text-sm text-gray-500">Tesda — July 13, 2023</p>
                    </li>
                    <li class="py-3">
                        <p class="text-sm font-medium text-gray-900">[Certification Name]</p>
                        <p class="text-sm text-gray-500">[Issuing Organization] — [Year]</p>
                    </li>
                    <li class="py-3">
                        <p class="text-sm font-medium text-gray-900">[Certification Name]</p>
                        <p class="text-sm text-gray-500">[Issuing Organization] — [Year]</p>
                    </li>
                </ul>

                {{-- TODO: link to a full certifications page/PDF once more are added --}}
                <a href="#" class="mt-2 inline-block text-sm font-medium text-blue-600 hover:text-blue-700">View All Certifications ↗</a>
            </section>

            {{-- Career Interests --}}
            <section id="career-interests" class="scroll-mt-16 border-t border-gray-200 py-8">
                <h2 class="text-lg font-semibold text-gray-900">Career Interests</h2>
                <p class="mt-3 text-sm text-gray-700">
                    <span class="font-medium text-gray-900">Primary focus:</span> Web Development / Full Stack Development
                </p>
                <p class="mt-2 text-sm text-gray-700">Also open to related entry-level IT roles, including:</p>
                <div class="mt-2 flex flex-wrap gap-1.5">
                    @foreach ([
                        'Junior Web Developer',
                        'Junior Full Stack Developer',
                        'Junior Software Developer',
                        'Front-End Developer',
                        'Back-End Developer',
                        'PHP/Laravel Developer',
                        'IT Support',
                        'Technical Support',
                        'Application Support',
                    ] as $role)
                        <span class="rounded-full border border-gray-200 bg-gray-50 px-2.5 py-1 text-xs text-gray-700">{{ $role }}</span>
                    @endforeach
                </div>

                {{-- Professional Strengths --}}
                <h3 class="mt-6 text-xs font-semibold uppercase tracking-wide text-gray-500">Professional Strengths</h3>
                <ul class="mt-2 grid grid-cols-2 gap-x-4 gap-y-1.5 text-sm text-gray-700 sm:grid-cols-4">
                    @foreach (['Problem Solving', 'Continuous Learning', 'Adaptability', 'Team Collaboration', 'Communication', 'Attention to Detail', 'Troubleshooting', 'Willingness to Learn'] as $strength)
                        <li class="flex items-start gap-1.5">
                            <span class="mt-1.5 h-1 w-1 shrink-0 rounded-full bg-blue-600"></span>
                            <span>{{ $strength }}</span>
                        </li>
                    @endforeach
                </ul>
            </section>

            {{-- Contact --}}
            <section id="contact" class="scroll-mt-16 border-t border-gray-200 py-8">
                <h2 class="text-lg font-semibold text-gray-900">Contact</h2>
                <p class="mt-3 max-w-2xl text-sm leading-relaxed text-gray-700">
                    I'm currently looking for my first professional opportunity in the IT industry. If you are hiring for an entry-level developer or related IT position, I'd be happy to connect.
                </p>

                <dl class="mt-4 space-y-1.5 text-sm text-gray-700">
                    <div class="flex gap-2"><dt class="w-20 shrink-0 text-gray-500">Email</dt><dd><a href="mailto:[YOUR EMAIL]" class="hover:text-blue-600">cyronmaducdoc2@gmail.com</a></dd></div>
                    <div class="flex gap-2"><dt class="w-20 shrink-0 text-gray-500">Phone</dt><dd><a href="tel:[YOUR PHONE]" class="hover:text-blue-600">09613488566</a></dd></div>
                    <div class="flex gap-2"><dt class="w-20 shrink-0 text-gray-500">Location</dt><dd>General Tinio, Nueva Ecija, Philippines</dd></div>
                    <div class="flex gap-2"><dt class="w-20 shrink-0 text-gray-500">GitHub</dt><dd><a href="https://github.com/Dosss42" target="_blank" rel="noopener" class="hover:text-blue-600">github.com/Dosss42</a></dd></div>
                    <div class="flex gap-2"><dt class="w-20 shrink-0 text-gray-500">LinkedIn</dt><dd><a href="https://www.linkedin.com/in/cyron-maducdoc-7023241b8/?isSelfProfile=true" target="_blank" rel="noopener" class="hover:text-blue-600">linkedin.com/in/cyron-maducdoc</a></dd></div>
                </dl>

                <div class="mt-5 flex flex-wrap gap-3 print:hidden">
                    <a href="mailto:[YOUR EMAIL]" class="inline-flex items-center rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">Email Me</a>
                    {{-- TODO: replace with the actual path to your CV PDF, e.g. asset('cv.pdf') --}}
                    <a href="#" download class="inline-flex items-center rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:border-gray-400">Download CV</a>
                </div>
            </section>

            {{-- Footer --}}
            <footer class="border-t border-gray-200 py-6 text-xs text-gray-500">
                <p>&copy; {{ date('Y') }} [YOUR FULL NAME]. All rights reserved.</p>
            </footer>
        </main>
    </body>
</html>
