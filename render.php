<!doctype html>
<html>

<head>
    <title>BuilderJS 4.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets/image/builderjs_color_logo.png" rel="icon" type="image/x-icon" />

    <link rel="stylesheet" href="dist/builder.css">
    <script src="dist/builder.js"></script>

    <script>
        var tags = [
            { type: 'label', tag: '{CONTACT_FIRST_NAME}' },
            { type: 'label', tag: '{CONTACT_LAST_NAME}' },
            { type: 'label', tag: '{CONTACT_FULL_NAME}' },
            { type: 'label', tag: '{CONTACT_EMAIL}' },
            { type: 'label', tag: '{CONTACT_PHONE}' },
            { type: 'label', tag: '{CONTACT_ADDRESS}' },
            { type: 'label', tag: '{ORDER_ID}' },
            { type: 'label', tag: '{ORDER_DUE}' },
            { type: 'label', tag: '{ORDER_TAX}' },
            { type: 'label', tag: '{PRODUCT_NAME}' },
            { type: 'label', tag: '{PRODUCT_PRICE}' },
            { type: 'label', tag: '{PRODUCT_QTY}' },
            { type: 'label', tag: '{PRODUCT_SKU}' },
            { type: 'label', tag: '{AGENT_NAME}' },
            { type: 'label', tag: '{AGENT_SIGNATURE}' },
            { type: 'label', tag: '{AGENT_MOBILE_PHONE}' },
            { type: 'label', tag: '{AGENT_ADDRESS}' },
            { type: 'label', tag: '{AGENT_WEBSITE}' },
            { type: 'label', tag: '{AGENT_DISCLAIMER}' },
            { type: 'label', tag: '{CURRENT_DATE}' },
            { type: 'label', tag: '{CURRENT_MONTH}' },
            { type: 'label', tag: '{CURRENT_YEAR}' },
            { type: 'button', tag: '{PERFORM_CHECKOUT}', 'text': 'Checkout' },
            { type: 'button', tag: '{PERFORM_OPTIN}', 'text': 'Subscribe' }
        ];

        var editor = new Editor({
            strict: true, // default == true
            root: '/dist/',
            url: 'templates/default/6037a2401b055',
            urlBack: window.location.origin,
            uploadAssetUrl: 'asset.php',
            uploadAssetMethod: 'POST',
            uploadTemplateUrl: 'upload.php',
            canvas: '#contentCanvas',
            sidePanel: '#sidebarPanel',
            tags: tags,
            saveUrl: 'save.php',
            saveMethod: 'POST',
            data: {
                _token: 'CSRF_TOKEN',
                type: 'default',
                template_id: '6037a2401b055'
            },
            export: {
                url: 'export.php'
            },
            backgrounds: [
                '/assets/image/backgrounds/images1.jpg',
                '/assets/image/backgrounds/images2.jpg',
                '/assets/image/backgrounds/images3.jpg',
                '/assets/image/backgrounds/images4.png',
                '/assets/image/backgrounds/images5.jpg',
                '/assets/image/backgrounds/images6.jpg',
                '/assets/image/backgrounds/images9.jpg',
                '/assets/image/backgrounds/images11.jpg',
                '/assets/image/backgrounds/images12.jpg',
                '/assets/image/backgrounds/images13.jpg',
                '/assets/image/backgrounds/images14.jpg',
                '/assets/image/backgrounds/images15.jpg',
                '/assets/image/backgrounds/images16.jpg',
                '/assets/image/backgrounds/images17.png'
            ]
        });

        $(document).ready(function () {
            editor.init();

            $('#saveButton').on('click', function (e) {
                e.preventDefault();

                editor.save(function () {
                    //
                    console.log('saved!');
                });
            });
        });
    </script>
</head>

<body>
    <div class="flex flex-col md:flex-row items-center p-6 md:px-6 mb-3 bg-white border-b box-shadow">
        <h5 class="my-0 md:mr-auto font-normal">BuilderJS</h5>
        <nav class="my-2 md:my-0 md:mr-4">
            <a class="p-2 text-gray-900" href="#">Features</a>
            <a class="p-2 text-gray-900" href="#">Enterprise</a>
            <a class="p-2 text-gray-900" href="#">Support</a>
            <a class="p-2 text-gray-900" href="#">Pricing</a>
        </nav>
        <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-blue-600 border-blue-600 hover:bg-blue-600 hover:text-white bg-white hover:bg-blue-600"
            href="#">Sign up</a>
    </div>
    <div class="container mx-auto sm:px-4">
        <h1 class="text-center mt-4 mb-3 font-normal">
            This is an example of rendering BuilderJS to a child <br> element rather than the whole body
        </h1>
        <p class="text-center mb-4">Pass the elements IDs to <code>canvas</code> and <code>sidePanel</code> parameters
            to use as containers for the main design view and control panel accordingly.<br>Remember to add a '#' prefix
            to the ID (see this page source for an example).</p>
        <div class="text-center">
            <button id="saveButton"
                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline bg-blue-600 text-white hover:bg-blue-600 py-3 px-4 leading-tight text-xl">Save</button>
        </div>
    </div>
    <div class="container mx-auto sm:px-4 py-4">
        <div class="flex flex-wrap ">
            <div class="md:w-3/5 pr-4 pl-4">
                <div id="contentCanvas" class="border rounded" style="height: 400px"></div>
            </div>
            <div class="md:w-2/5 pr-4 pl-4">
                <div id="sidebarPanel" class="border rounded" style="height: 400px"></div>
            </div>
        </div>
    </div>
</body>

</html>