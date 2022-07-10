<html>
    <body>
        <div id="letterPart" style="max-width: 800px; border: 1px solid black; margin: auto;">
            <style>
                * {
                    font-size: .95rem;
                    font-family: monospace;
                }
                p {
                    margin: 0px !important;
                    line-height: 20px;
                }
                td {
                    padding: 0px 15px;
                }

                .hd-label {
                    visibility: hidden;
                }
            </style>
            <table style="width: 100%;">
                <tr>
                    <td style="float: right;
                        width: 26%;
                        text-align: right;">
                        <p>Dennis Ritchie</p>
                        <p>Test Doctor</p>
                        <p>Test Hospital</p>
                        <p>Test Hospital Address, Test, Test-12202</p>
                    </td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 26%;">
                        <p>Date</p>
                        <p>Recipient Information (Patient’s usual doctor- GP)</p>
                        <p>GP Name</p>
                        <p>Practice Name</p>
                        <p>Address</p>
                    </td>
                </tr>
            </table>
            <table style="width: 100%; margin-top: 20px;">
                <tr>
                    <td>
                        <p class="hd-label">Introduction</p>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam doloribus laudantium neque pariatur qui repellat velit? Accusamus blanditiis deserunt distinctio dolore dolores dolorum eaque est excepturi illum in ipsa neque nihil perferendis praesentium quis quisquam repellat saepe, sunt tempora voluptates. Accusantium adipisci aliquam animi assumenda aut beatae cupiditate distinctio ea eaque, eos, eum facere hic ipsa ipsum iste magnam minima nemo neque numquam omnis possimus provident quam qui quidem repellendus repudiandae tempore. Dolor, harum, recusandae. A cupiditate id ipsam libero nemo nulla quis similique. Ad asperiores corporis dicta expedita, magni maiores quis repellendus? Atque labore laudantium repudiandae sit veniam.</p>
                        </div>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; margin-top: 20px;">
                <tr>
                    <td>
                        <p class="hd-label">Introduction</p>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam doloribus laudantium neque pariatur qui repellat velit? Accusamus blanditiis deserunt distinctio dolore dolores dolorum eaque est excepturi illum in ipsa neque nihil perferendis praesentium quis quisquam repellat saepe, sunt tempora voluptates. Accusantium adipisci aliquam animi assumenda aut beatae cupiditate distinctio ea eaque, eos, eum facere hic ipsa ipsum iste magnam minima nemo neque numquam omnis possimus provident quam qui quidem repellendus repudiandae tempore. Dolor, harum, recusandae. A cupiditate id ipsam libero nemo nulla quis similique. Ad asperiores corporis dicta expedita, magni maiores quis repellendus? Atque labore laudantium repudiandae sit veniam.</p>
                        </div>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; margin-top: 20px;">
                <tr>
                    <td>
                        <p class="hd-label">Introduction</p>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam doloribus laudantium neque pariatur qui repellat velit? Accusamus blanditiis deserunt distinctio dolore dolores dolorum eaque est excepturi illum in ipsa neque nihil perferendis praesentium quis quisquam repellat saepe, sunt tempora voluptates. Accusantium adipisci aliquam animi assumenda aut beatae cupiditate distinctio ea eaque, eos, eum facere hic ipsa ipsum iste magnam minima nemo neque numquam omnis possimus provident quam qui quidem repellendus repudiandae tempore. Dolor, harum, recusandae. A cupiditate id ipsam libero nemo nulla quis similique. Ad asperiores corporis dicta expedita, magni maiores quis repellendus? Atque labore laudantium repudiandae sit veniam.</p>
                        </div>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; margin-top: 20px;">
                <tr>
                    <td>
                        <p class="hd-label">Introduction</p>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam doloribus laudantium neque pariatur qui repellat velit? Accusamus blanditiis deserunt distinctio dolore dolores dolorum eaque est excepturi illum in ipsa neque nihil perferendis praesentium quis quisquam repellat saepe, sunt tempora voluptates. Accusantium adipisci aliquam animi assumenda aut beatae cupiditate distinctio ea eaque, eos, eum facere hic ipsa ipsum iste magnam minima nemo neque numquam omnis possimus provident quam qui quidem repellendus repudiandae tempore. Dolor, harum, recusandae. A cupiditate id ipsam libero nemo nulla quis similique. Ad asperiores corporis dicta expedita, magni maiores quis repellendus? Atque labore laudantium repudiandae sit veniam.</p>
                        </div>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; margin-top: 20px;">
                <tr>
                    <td>
                        <p style="font-size: 15px !important;"><b>Best Regards</b></p>
                        <p>Dr. Test Doctor</p>
                        <p>APPENDIX</p>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; margin-top: 30px;">
                <tr>
                    <td>
                        <div style="
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        ">
                            Powered By <img src="{{ asset('assets/images/logo.png') }}" alt="" style="margin-left: 10px; height: 20px;">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    <div style="max-width: 800px; margin: auto; margin-top: 20px; text-align: center;">
        <button class="btn btn-primary" onclick="printDiv('letterPart')">Print Letter</button>
        <a href="{{ url('generate-letter/'.$patient_id) }}">Edit Patient Letter</a>
        <a href="" class="btn btn-primary">Share</a>
    </div>
    </body>

    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
</html>
