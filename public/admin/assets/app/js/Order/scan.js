import QrScanner from "./qrCode/qr-scanner.min.js";

const video = document.getElementById('qr-video');
const videoContainer = document.getElementById('video-container');
const camQrResult = document.getElementById('cam-qr-result');

function setResult(label, result) {
    console.log(result.data);
    label.textContent = result.data;
    label.style.color = 'teal';
    clearTimeout(label.highlightTimeout);
    label.highlightTimeout = setTimeout(() => label.style.color = 'inherit', 100);
}

// ####### Web Cam Scanning #######

const scanner = new QrScanner(video, result => setResult(camQrResult, result), {
    onDecodeError: error => {
        camQrResult.textContent = error;
        camQrResult.style.color = 'inherit';
    },
    highlightScanRegion: true,
    highlightCodeOutline: true,
});

scanner.start().then(() => {
    // List cameras after the scanner started to avoid listCamera's stream and the scanner's stream being requested
    // at the same time which can result in listCamera's unconstrained stream also being offered to the scanner.
    // Note that we can also start the scanner after listCameras, we just have it this way around in the demo to
    // start the scanner earlier.
    QrScanner.listCameras(true).then(cameras => cameras.forEach(camera => {
        const option = document.createElement('option');
        option.value = camera.id;
        option.text = camera.label;
    }));
});

// for debugging
window.scanner = scanner;