<style>
    .form-group {
        opacity: 0;
        height: 0;
        overflow: hidden;
        transition: opacity 1s ease-in-out;
    }

    .form-group.show {
        opacity: 1;
        height: auto;
    }
    

</style>

<h1 class="page-header">Multi-Step Form with JS</h1>
<div class="form-container">
    <form action="" role="form">

        <div id="part1" class="form-group show">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Part 1</h3>
                </div>
                <input type="text" id="name" class="form-control" placeholder="Full Name"
                    aria-describedby="sizing-addon1">
                <div class="btn-group btn-group-lg" role="group" aria-label="...">
                    <label for='step2' id="continue-step2" class="continue">
                        <div class="btn btn-default btn-success btn-lg">Continue</div>
                    </label>
                </div>
            </div>
        </div>

        <div id="part2" class="form-group">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Part 2</h3>
                </div>
                <input type="email" id="email" class="form-control" placeholder="Email">
                <input type="phone" id="phone" class="form-control" placeholder="Phone">
                <input type="number" id="zip" class="form-control" placeholder="Zip Code">
                <div class="btn-group btn-group-lg btn-group-justified" role="group" aria-label="...">
                    <label for='step2' id="back-step2" class="back">
                        <div class="btn btn-default btn-primary btn-lg" role="button">Back</div>
                    </label>
                    <label for='step3' id="continue-step3" class="continue">
                        <div class="btn btn-default btn-success btn-lg" role="button">Continue</div>
                    </label>
                </div>
            </div>
        </div>

        <div id="part3" class="form-group">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Part 3</h3>
                </div>
                <input type="email" id="email" class="form-control" placeholder="Email">
                <input type="phone" id="phone" class="form-control" placeholder="Phone">
                <input type="number" id="zip" class="form-control" placeholder="Zip Code">
                <div class="btn-group btn-group-lg btn-group-justified" role="group" aria-label="...">
                    <label for='step3' id="back-step3" class="back">
                        <div class="btn btn-default btn-primary btn-lg" role="button">Back</div>
                    </label>
                    <label for='step4' id="continue-step4" class="continue">
                        <div class="btn btn-default btn-success btn-lg" role="button">Continue</div>
                    </label>
                </div>
            </div>
        </div>

        <div id="part4" class="form-group">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Part 4</h3>
                </div>
                <textarea id="message" class="form-control" placeholder="Message"></textarea>
                <div class="btn-group btn-group-lg" role="group" aria-label="...">
                    <label for='step4' id="back-step4" class="back">
                        <div class="btn btn-default btn-primary btn-lg" role="button">Back</div>
                    </label>
                    <label for='step5' id="continue-step5" class="continue">
                        <div class="btn btn-default btn-success btn-lg" role="button">Continue</div>
                    </label>
                </div>
            </div>
        </div>

        <div id="part5" class="form-group">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Part 5</h3>
                </div>
                <textarea id="message" class="form-control" placeholder="Message"></textarea>
                <div class="btn-group btn-group-lg" role="group" aria-label="...">
                    <label for='step5' id="back-step5" class="back">
                        <div class="btn btn-default btn-primary btn-lg" role="button">Back</div>
                    </label>
                    <label for='step6' id="continue-step6" class="continue">
                        <div class="btn btn-default btn-success btn-lg" role="button">Continue</div>
                    </label>
                </div>
            </div>
        </div>

        <div id="part6" class="form-group">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Part 6</h3>
                </div>
                <textarea id="message" class="form-control" placeholder="Message"></textarea>
                <div class="btn-group btn-group-lg" role="group" aria-label="...">
                    <label for='step5' id="back-step5" class="back">
                        <div class="btn btn-default btn-primary btn-lg">Back</div>
                    </label>
                    <label class="continue">
                        <button type="submit" class="btn btn-default btn-success btn-lg">Submit</button>
                    </label>
                </div>
            </div>
        </div>

        <!-- Add more form parts as needed -->
        <!-- ... -->

    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const steps = document.querySelectorAll('.form-group');
        let currentStep = 0;

        function showStep(index) {
            steps.forEach((step, i) => {
                step.classList.toggle('show', i === index);
            });
        }

        function nextStep() {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }

        // Add event listeners for all steps dynamically
        steps.forEach((step, index) => {
            const continueButton = step.querySelector(`.continue`);
            const backButton = step.querySelector(`.back`);

            if (continueButton) {
                continueButton.addEventListener("click", function () {
                    nextStep();
                });
            }

            if (backButton) {
                backButton.addEventListener("click", function () {
                    prevStep();
                });
            }
        });

        // Dynamically generate checkboxes
        // const checkboxContainer = document.getElementById('checkbox-container');
        // steps.forEach((step, index) => {
        //     const checkbox = document.createElement('input');
        //     checkbox.type = 'checkbox';
        //     checkbox.id = `step${index + 2}`;
        //     checkboxContainer.appendChild(checkbox);
        // });
    });
</script>
