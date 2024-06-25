var url = '/wp-content/themes/GCE_theme/files/GCE_Catalogue.pdf';
var pdfContainer = document.getElementById('pdf-container');

pdfjsLib.getDocument(url).then(function(pdf) {
pdf.getPage(1).then(function(page) {
    var canvas = document.createElement('canvas');
    pdfContainer.appendChild(canvas);
    page.render({canvasContext: canvas.getContext('2d')});
});
});
