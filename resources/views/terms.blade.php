@extends('layouts.app', ['title' => 'Terms of Service - Xplore Car Imports'])

@section('content')
<div class="bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800 text-slate-100 min-h-screen">
    <div class="max-w-4xl mx-auto px-6 py-16">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Terms of Service</h1>
            <p class="text-slate-300">Last updated: February 12, 2026</p>
        </div>

        <div class="rounded-3xl bg-white/10 border border-white/10 backdrop-blur p-8 md:p-12 space-y-8">
            <section>
                <h2 class="text-2xl font-bold mb-4">1. Agreement to Terms</h2>
                <p class="text-slate-300 leading-relaxed">
                    By accessing and using this website and services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-bold mb-4">2. Use License</h2>
                <p class="text-slate-300 leading-relaxed mb-4">
                    Permission is granted to temporarily download one copy of the materials (information or software) on Xplore Car Imports' website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
                </p>
                <ul class="space-y-2 text-slate-300 ml-4">
                    <li>• Modify or copy the materials</li>
                    <li>• Use the materials for any commercial purpose or for any public display</li>
                    <li>• Attempt to decompile or reverse engineer any software contained on the website</li>
                    <li>• Remove any copyright or other proprietary notations from the materials</li>
                    <li>• Transfer the materials to another person or "mirror" the materials on any other server</li>
                </ul>
            </section>

            <section>
                <h2 class="text-2xl font-bold mb-4">3. Disclaimer</h2>
                <p class="text-slate-300 leading-relaxed">
                    The materials on Xplore Car Imports' website are provided on an 'as is' basis. Xplore Car Imports makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-bold mb-4">4. Limitations</h2>
                <p class="text-slate-300 leading-relaxed">
                    In no event shall Xplore Car Imports or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on Xplore Car Imports' website, even if Xplore Car Imports or a representative has been notified orally or in writing of the possibility of such damage.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-bold mb-4">5. Accuracy of Materials</h2>
                <p class="text-slate-300 leading-relaxed">
                    The materials appearing on Xplore Car Imports' website could include technical, typographical, or photographic errors. Xplore Car Imports does not warrant that any of the materials on its website are accurate, complete, or current. Xplore Car Imports may make changes to the materials contained on its website at any time without notice.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-bold mb-4">6. Links</h2>
                <p class="text-slate-300 leading-relaxed">
                    Xplore Car Imports has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Xplore Car Imports of the site. Use of any such linked website is at the user's own risk.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-bold mb-4">7. Modifications</h2>
                <p class="text-slate-300 leading-relaxed">
                    Xplore Car Imports may revise these terms of service for its website at any time without notice. By using this website, you are agreeing to be bound by the then current version of these terms of service.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-bold mb-4">8. Governing Law</h2>
                <p class="text-slate-300 leading-relaxed">
                    These terms and conditions are governed by and construed in accordance with the laws of Kenya, and you irrevocably submit to the exclusive jurisdiction of the courts located in Nairobi.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-bold mb-4">9. Contact Information</h2>
                <p class="text-slate-300 leading-relaxed">
                    If you have any questions about these Terms of Service, please contact us at:
                </p>
                <div class="mt-4 space-y-2 text-slate-300">
                    <p>Email: info@xplorecar.com</p>
                    <p>Phone: +254 700 123 456</p>
                    <p>Address: Nairobi, Kenya</p>
                </div>
            </section>
        </div>
    </div>

    @include('partials.footer')
</div>
@endsection
