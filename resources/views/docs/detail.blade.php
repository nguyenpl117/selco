<x-layouts.base>
    <x-breadcrumbs title="Các dự án" link="/du-an"/>
    <main>
        <div class="max-w-screen-2xl mx-auto px-4 mb-10">
            <div class="relative">
                <div class="image-cover" style="padding-top: 45%">
                    <img class="w-full lozad m-0 lg:group-hover:scale-110 transition-all duration-500 safelyLoadImage"
                         alt="Ra nước ngoài, lục từng container để đưa thiết bị về làm đường dây 500kV"
                         width="1920"
                         height="1080"
                         src="https://songda11.com.vn/wp-content/uploads/dji-0921-2910.jpg">
                </div>
                <div class="h-[120px]"></div>
                <div class="bg-gray-300 h-[200px] w-2/3 absolute z-10 bottom-0">
                </div>
                <div class="bg-white w-10/12 lg:w-5/12 max-w-full absolute z-10 md:left-[100px] rounded p-7 bottom-[40px] right-3">
                    <a href="#" class="text-primary-500 hover:text-black">Quan hệ cổ đông</a>,
                    <a href="#" class="text-primary-500 hover:text-black">Công bố thông tin</a>
                    <h1 class="text-3xl">Báo cáo kết quả GDCP có bảo đảm của người nội bộ và người liên quan của người nội bộ – Ông Nguyễn Văn Sơn</h1>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-4 mt-8">
                <div class="col-span-12 lg:col-span-9">
                    <div class="shadow p-5 *:my-6">
                        <div class="pdf-viewer" data-url="./example.pdf">
                            <canvas class="pdf-the-canvas"></canvas>
                            <div class="p-2 bg-[gray]">
                                <button type="button"
                                        class="pdf-prev border border-gray-700 bg-black bg-opacity-20 text-white
                                     disabled:opacity-50
                                     rounded px-2 py-1">
                                    Previous
                                </button>
                                <button type="button"
                                        class="pdf-next border border-gray-700 bg-black bg-opacity-20 text-white
                                     disabled:opacity-50
                                     rounded px-2 py-1">
                                    Next
                                </button>
                                &nbsp; &nbsp;
                                <span class="text-gray-200">Page: <span class="pdf-page_num"></span> / <span class="pdf-page_count"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-3">
                    <x-blog_categories/>
                </div>
            </div>
        </div>
    </main>
    <div class="max-w-screen-2xl mx-auto px-4 mb-10">
        <div>
            <h1 class="post_cat_title uppercase border-b border-dotted border-gray-900">Văn bản khác</h1>
        </div>
        <x-docs title="" :posts="[1,2,3]"/>
    </div>
    
    <script type="module">
        // If absolute URL from the remote server is provided, configure the CORS
        // header on that server.
        // var url = './100NQHDQT.pdf';
        var url = 'https://raw.githubusercontent.com/mozilla/pdf.js/ba2edeae/web/compressed.tracemonkey-pldi-09.pdf';

        // Loaded via <script> tag, create shortcut to access PDF.js exports.
        var {pdfjsLib} = globalThis;

        // The workerSrc property shall be specified.
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.mjs';

        document.querySelectorAll('.pdf-viewer')
            .forEach(function (e) {
                renderPreviewPDF(e);
            });

        function renderPreviewPDF(element) {
            var pdfDoc         = null,
                pageNum        = 1,
                pageRendering  = false,
                pageNumPending = null,
                canvas         = element.querySelector('.pdf-the-canvas'),
                ctx            = canvas.getContext('2d'),
                url            = element.getAttribute('data-url');
            let desiredWidth = element.parentElement.getBoundingClientRect().width - 40;
            let t = null;

            const observer = new ResizeObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.contentRect.width !== desiredWidth) {
                        if (t) {
                            clearTimeout(t);
                        }
                        t = setTimeout(() => {
                            desiredWidth = entry.contentRect.width;
                            renderPage(pageNum);
                        }, 50);
                        // desiredWidth = entry.contentRect.width;
                        // renderPage(pageNum);
                    }
                });
            });
            observer.observe(element.parentElement);

            /**
             * Get page info from document, resize canvas accordingly, and render page.
             * @param num Page number.
             */
            function renderPage(num) {
                pageRendering = true;
                // Using promise to fetch the page
                pdfDoc.getPage(num).then(function (page) {
                    const scaledViewport = page.getViewport({scale: 1,});
                    const scale = desiredWidth / scaledViewport.width;
                    const viewport = page.getViewport({scale: scale});
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    // Render PDF page into canvas context
                    var renderContext = {
                        canvasContext: ctx,
                        viewport: viewport
                    };
                    var renderTask = page.render(renderContext);

                    // Wait for rendering to finish
                    renderTask.promise.then(function () {
                        pageRendering = false;
                        if (pageNumPending !== null) {
                            // New page rendering is pending
                            renderPage(pageNumPending);
                            pageNumPending = null;
                        }
                    });
                });

                // Update page counters
                element.querySelector('.pdf-page_num').textContent = num;

                element.querySelector('.pdf-prev').disabled = pageNum === 1;
                element.querySelector('.pdf-next').disabled = pageNum === pdfDoc.numPages;
            }

            /**
             * If another page rendering in progress, waits until the rendering is
             * finised. Otherwise, executes rendering immediately.
             */
            function queueRenderPage(num) {
                if (pageRendering) {
                    pageNumPending = num;
                } else {
                    renderPage(num);
                }
            }

            /**
             * Displays previous page.
             */
            function onPrevPage() {
                if (pageNum <= 1) {
                    return;
                }
                pageNum--;
                queueRenderPage(pageNum);
            }

            element.querySelector('.pdf-prev').addEventListener('click', onPrevPage);

            /**
             * Displays next page.
             */
            function onNextPage() {
                if (pageNum >= pdfDoc.numPages) {
                    return;
                }
                pageNum++;
                queueRenderPage(pageNum);
            }

            element.querySelector('.pdf-next').addEventListener('click', onNextPage);

            /**
             * Asynchronously downloads PDF.
             */
            pdfjsLib.getDocument(url).promise.then(function (pdfDoc_) {
                pdfDoc = pdfDoc_;
                element.querySelector('.pdf-page_count').textContent = pdfDoc.numPages;

                // Initial/first page rendering
                renderPage(pageNum);
            });
        }
    </script>
</x-layouts.base>