<!-- Register / Enquire Now Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="registerModalLabel">Enquire About a Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="frmInquire" method="POST" action="#">
                    @csrf
                    <div class="mb-3">
                        <label for="inqname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="inqname" name="inqname" placeholder="Your Full Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="inqemail" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="inqemail" name="inqemail" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="inqphone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="inqphone" name="inqphone" placeholder="Your Phone Number" required>
                    </div>
                    <div class="mb-3">
                        <label for="inqcourse" class="form-label">Course / Degree Interested In</label>
                        <input type="text" class="form-control" id="inqcourse" name="inqcourse" placeholder="e.g. BSc (Hons) Software Engineering" required>
                    </div>
                    <div class="mb-3">
                        <label for="inqcomments" class="form-label">Message</label>
                        <textarea class="form-control" id="inqcomments" name="inqcomments" rows="4" placeholder="Your Inquiry Message..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Submit Inquiry</button>
                </form>
            </div>
        </div>
    </div>
</div>