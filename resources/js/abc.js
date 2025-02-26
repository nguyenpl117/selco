const contentElem = document.getElementById('content');

const images = [];
contentElem.querySelectorAll('.attachment-woocommerce_thumbnail').forEach(function (el) {
    images.push(el.getAttribute('src'));
});

const desc = contentElem.querySelector('.thongtinchung');
const body = contentElem.querySelector('.col.large-12.small-12>ul');

// const content = contentElem.innerHTML;
var data = [];

contentElem.querySelectorAll('.col-inner').forEach(function (el) {
    const boxImageElm = el.querySelector('.box-image');
    const href = boxImageElm.querySelector('a').getAttribute('href');
    const title = boxImageElm.querySelector('a').getAttribute('title');
    const image = boxImageElm.querySelector('img').getAttribute('src');

    console.log({href, title, image});

    data.push({href, title, image});
});

const d = [
    {
        "href": "https://songda11.com.vn/du-an-xay-lap-dien/goi-thau-42-49-58-61-du-an-dz-500kv-nam-dinh-i-pho-noi.html",
        "title": "Dự án: ĐZ 500kV Nam Định I – Phố Nối – Gói thầu (42; 49; 58; 61)",
        "image": "https://songda11.com.vn/wp-content/uploads/Goi-thau-42-49-58-61-Du-an-DZ-500kV-Nam-Dinh-I-Pho-Noi.jpg"
    }, {
        "href": "https://songda11.com.vn/du-an-xay-lap-dien/du-an-dz-500kv-nam-dinh-i-thanh-hoa-goi-thau-5-35.html",
        "title": "Dự án: ĐZ 500kV Nam Định I – Thanh Hóa – Gói thầu (5; 35)",
        "image": "https://songda11.com.vn/wp-content/uploads/Goi-thau-5-35-Du-an-DZ-500kV-Nam-Dinh-I-–-Thanh-Hoa.jpg"
    }, {
        "href": "https://songda11.com.vn/du-an-xay-lap-dien/du-an-dz-500kv-quang-trach-quynh-luu-goi-thau-20-34-37-38.html",
        "title": "Dự án: ĐZ 500kV Quảng Trạch – Quỳnh Lưu – Gói thầu (20; 34; 37; 38)",
        "image": "https://songda11.com.vn/wp-content/uploads/Goi-thau-20-34-37-38-Du-an-DZ-500kV-Quang-Trach-Quynh-Luu-3.jpg"
    }, {
        "href": "https://songda11.com.vn/du-an-xay-lap-dien/du-an-dz-500kv-quynh-luu-thanh-hoa-goi-thau-9-12.html",
        "title": "Dự Án: ĐZ 500kV Quỳnh Lưu – Thanh Hóa –\tGói thầu (9; 12)",
        "image": "https://songda11.com.vn/wp-content/uploads/Goi-thau-9-12-Du-An-DZ-500kV-Quynh-Luu-Thanh-Hoa-9.2.jpg"
    }, {
        "href": "https://songda11.com.vn/du-an-xay-lap-dien/du-an-dz-500kv-nmnd-nam-dinh-i-pho-noi-goi-thau-05-06-15-21-22-23-cung-cap-va-van-chuyen-cot-thep.html",
        "title": "Dự án: ĐZ 500kV NMNĐ Nam Định I – Phố Nối – Gói thầu (05; 06; 15; 21; 22; 23) cung cấp và vận chuyển cột thép",
        "image": "https://songda11.com.vn/wp-content/uploads/Goi-thau-05-06-15-21-22-23-cung-cap-va-van-chuyen-cot-thep-Du-an-DZ-500kV-NMND-Nam-Dinh-I-Pho-Noi-2.jpg"
    }, {
        "href": "https://songda11.com.vn/du-an-xay-lap-dien/du-an-dz-500kv-nmnd-nam-dinh-i-thanh-hoa-goi-thau-17-18-22-23-cung-cap-va-van-chuyen-cot-thep.html",
        "title": "Dự án: ĐZ 500kV NMNĐ Nam Định I – Thanh Hóa: Gói thầu (17; 18; 22; 23) cung cấp và vận chuyển cột thép",
        "image": "https://songda11.com.vn/wp-content/uploads/Goi-thau-17-18-22-23-cung-cap-va-van-chuyen-cot-thep-Du-an-DZ-500kV-NMND-Nam-Dinh-I-Thanh-Hoa.jpg"
    }, {
        "href": "https://songda11.com.vn/du-an-xay-lap-dien/du-an-cung-cap-va-xay-lap-dz-230kv-nmtd-xekaman-1-den-bien-gioi-lao-vn.html",
        "title": "Dự án: Cung cấp và xây lắp ĐZ 230kV – NMTĐ Xekaman 1 đến biên giới Lào-VN",
        "image": "https://songda11.com.vn/wp-content/uploads/Cung-cap-va-xay-lap-DZ-230kV-NMTD-Xekaman-1-den-bien-gioi-Lao-VN.jpg"
    }, {
        "href": "https://songda11.com.vn/du-an-xay-lap-dien/du-an-tba-220-kv-khu-kinh-te-nghi-son-va-duong-day-dau-noi-cung-cap-va-xay-lap-dz-220kv.html",
        "title": "Dự án: TBA 220 KV – Khu kinh tế Nghi Sơn và Đường dây đấu nối – Cung cấp và xây lắp ĐZ 220kV",
        "image": "https://songda11.com.vn/wp-content/uploads/TBA-220-Khu-kinh-te-Nghi-Son-va-DZ-dau-noi.jpg"
    }, {
        "href": "https://songda11.com.vn/du-an-xay-lap-dien/du-an-dz-220kv-bat-xat-bao-thang-tba-500kv-lao-cai.html",
        "title": "Dự án: ĐZ 220kV Bát Xát – Bảo Thắng/TBA 500kV Lào Cai",
        "image": "https://songda11.com.vn/wp-content/uploads/Cung-cap-va-xay-lap-DZ-220kV-–-Du-an-DZ-220kV-Bat-Xat-Bao-Thang-TBA-500kV-Lao-Cai.jpg"
    }, {
        "href": "https://songda11.com.vn/du-an-xay-lap-dien/du-an-dz-500kv-quang-trach-doc-soi-goi-thau-9-lo-9-3-lo-9-12-lo-9-13-xay-lap-bao-gom-cac-tram-lap-quang.html",
        "title": "Dự án: ĐZ 500kV Quảng Trạch – Dốc Sỏi – Gói thầu 9 (Lô 9.3; Lô 9.12; Lô 9.13): Xây lắp (bao gồm các trạm lặp quang)",
        "image": "https://songda11.com.vn/wp-content/uploads/Goi-thau-9-Lo-9.3-Lo-9.12-Lo-9.13-Xay-lap-bao-gom-cac-tram-lap-quang-Du-an-DZ-500kV-Quang-Trach-Doc-Soi.jpg"
    }, {
        "href": "https://songda11.com.vn/du-an-xay-lap-dien/du-an-he-thong-co-dien-toa-nha-evn.html",
        "title": "Dự án: Hệ thống cơ điện tòa nhà EVN",
        "image": "https://songda11.com.vn/wp-content/uploads/toa-nha-evn-18hd8rhdf.jpg"
    }, {
        "href": "https://songda11.com.vn/du-an-xay-lap-dien/du-an-he-thong-cap-thoat-nuoc-cong-trinh-nha-quoc-hoi.html",
        "title": "Dự án: Hệ thống cấp, thoát  nước công trình Nhà Quốc hội",
        "image": "https://songda11.com.vn/wp-content/uploads/z5759767417664_0d88a07a1cf89d7dc0174e6d8bb0d111.jpg"
    }];

for (const item of d) {
    fetch(item.href)
        .then(res => res.text())
        .then(html => {
            const parser = new DOMParser()

            // Parse the text
            const doc = parser.parseFromString(html, "text/html")
            const contentElem = doc.getElementById('content');

            const images = [];
            contentElem.querySelectorAll('.attachment-woocommerce_thumbnail').forEach(function (el) {
                images.push(el.getAttribute('src'));
            });

            const desc = contentElem.querySelector('.thongtinchung').outerHTML;
            const body = contentElem.querySelector('.col.large-12.small-12>ul').outerHTML;

            item.images = images;
            item.body = body;
            item.desc = desc;
        })
}
console.log(d);