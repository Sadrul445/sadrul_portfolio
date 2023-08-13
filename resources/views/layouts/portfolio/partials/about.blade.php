<div class="container text-center">
    <!-- about wrapper -->
    <div class="about" id="about">
        <div class="about-img-holder">
            <img src="assets/imgs/sadrul.jpg" class="about-img zoom"
                style="border-radius:10px;width:70%;box-shadow:5px 40px 50px 1px #666277">
        </div>
        <div class="about-caption">
            <p class="section-subtitle">Who Am I ?</p>
            <h2 class="section-title mb-3">About Me</h2>
            <div class="social-links text-center m-auto ml-sm-auto py-4 border-bottom w-100">
                <a href="https://www.linkedin.com/in/sadrulpashachowdhury?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BICn5pJoLQceQgMEDCFQKWw%3D%3D"
                    class="link px-2"><i class="fa-brands fa-linkedin fa-beat fa-xl"></i></a>
                <a href="https://www.facebook.com/sadrultanim/" class="link px-2"><i
                        class="fa-brands fa-facebook fa-beat fa-xl"></i></a>
                <a href="javascript:void(0);" class="link px-2" id="whatsapp-icon"><i
                        class="fa-brands fa-whatsapp fa-beat fa-xl"></i></a>
                        {{-- https://chat.whatsapp.com/DtuuluBNj1r8AmosVEqY3l --}}
                <a href="https://github.com/Sadrul445" class="link px-2"><i
                        class="fa-brands fa-github fa-beat fa-xl"></i></a>
            </div>
            <p class="pt-4 text-justify">
                Hello! I'm Tanim, a junior software engineer specialized in backend development using Laravel framework.
                I excel in creating backend APIs and have extensive experience with e-commerce websites, admin panels,
                and API development. Proficient in Jira, SDLC, and database diagram schema. Skilled in Agile teamwork
                and Git version control. Check my portfolio for more details. Thank you!
            </p>
            <div class="row" style="font-size:14px;text-align:left">
                <div class="col-lg-5 py-2">
                    <ul>
                        <li class="py-2 list-unstyled list-inline"><i class="fa-solid fa-angle-right fa-sm"
                                style="color: #6f42c1;"></i> <strong class="text-primary">Birthday:</strong> <span>22
                                OCT 1999</span></li>
                        <li class="py-2 list-unstyled list-inline"><i class="fa-solid fa-angle-right fa-sm"
                                style="color: #6f42c1;"></i> <strong class="text-primary">Website:</strong>
                            <span>www.sadrultanim.com</span>
                        </li>
                        <li class="py-2 list-unstyled list-inline"><i class="fa-solid fa-angle-right fa-sm"
                                style="color: #6f42c1;"></i> <strong class="text-primary">Phone:</strong>
                            <span>+880-1683682400</span>
                        </li>
                        <li class="py-2 list-unstyled list-inline"><i class="fa-solid fa-angle-right fa-sm"
                                style="color: #6f42c1;"></i> <strong class="text-primary">City:</strong>
                            <span>Chittagong, Bangladesh</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7 py-2">
                    <ul>
                        <li class="py-2 list-unstyled list-inline"><i class="fa-solid fa-angle-right fa-sm"
                                style="color: #6f42c1;"></i> <strong class="text-primary">Age:</strong> <span>23</span>
                        </li>
                        <li class="py-2 list-unstyled list-inline"><i class="fa-solid fa-angle-right fa-sm"
                                style="color: #6f42c1;"></i> <strong class="text-primary">Degree:</strong> <span>B.Sc.
                                Computer Science and Engineering</span></li>
                        <li class="py-2 list-unstyled list-inline"><i class="fa-solid fa-angle-right fa-sm"
                                style="color: #6f42c1;"></i> <strong class="text-primary">Email:</strong>
                            {{-- <span>tanimchy8@gmail.com</span> --}}
                            <span>sadrulpashachowdhury.edu@gmail.com</span>
                        </li>
                        <li class="py-2 list-unstyled list-inline"><i class="fa-solid fa-angle-right fa-sm"
                                style="color: #6f42c1;"></i> <strong class="text-primary">Freelance:</strong>
                            <span style="color: green;font-weight:600">Available</span>
                        </li>
                    </ul>
                </div>
            </div>
            <button class="btn-rounded zoom btn btn-outline-primary mt-4 box-shadow py-3 px-4" id="downloadButton"> <i
                    class="fa-solid fa-download fa-bounce fa-lg"></i> Download CV</button>
        </div>
    </div><!-- end of about wrapper -->
</div>
<script>
    // Get the WhatsApp icon element
    const whatsappIcon = document.getElementById("whatsapp-icon");

    // Define the WhatsApp number (replace with the actual number)
    const whatsappNumber = "01683682400";

    // Add a click event listener to the WhatsApp icon
    whatsappIcon.addEventListener("click", () => {
        // Create a temporary input element
        const tempInput = document.createElement("input");
        // Set the value of the input element to the WhatsApp number
        tempInput.value = whatsappNumber;
        // Append the input element to the document
        document.body.appendChild(tempInput);
        // Select the content of the input element
        tempInput.select();
        // Copy the selected content to the clipboard
        document.execCommand("copy");
        // Remove the temporary input element
        document.body.removeChild(tempInput);

        // Show a Bootstrap tooltip on the WhatsApp icon
        $(whatsappIcon).tooltip({
            title: "WhatsApp number copied!",
            placement: "top",
            trigger: "manual"
        });
        // Show the tooltip
        $(whatsappIcon).tooltip("show");
        // Hide the tooltip after a short delay
        setTimeout(() => {
            $(whatsappIcon).tooltip("hide");
        }, 2000);
    });
</script>