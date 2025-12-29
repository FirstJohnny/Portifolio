export default {
    init() {
        this.createDataStream();
        this.createScanLines();
    },

    createDataStream() {
        const stream = document.getElementById('dataStream');
        if (!stream) return;

        for (let i = 0; i < 20; i++) {
            const line = document.createElement('div');
            line.className = 'stream-line';
            line.style.top = `${Math.random() * 100}%`;
            line.style.animationDelay = `${Math.random() * 3}s`;
            line.style.width = `${Math.random() * 100 + 50}px`;
            stream.appendChild(line);
        }
    },

    createScanLines() {
        setInterval(() => {
            const scanLine = document.createElement('div');
            scanLine.className = 'scan-line';
            scanLine.style.animationDelay = `${Math.random() * 2}s`;
            document.getElementById('cyberScan')?.appendChild(scanLine);

            setTimeout(() => scanLine.remove(), 3000);
        }, 1000);
    }
};
