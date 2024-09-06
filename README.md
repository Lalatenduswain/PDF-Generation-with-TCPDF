# PDF Generation with TCPDF

This repository provides a PHP-based solution to generate and download PDFs using TCPDF. The solution includes an HTML page with a button to trigger PDF generation and download, and a PHP script to handle the PDF creation.

## Prerequisites

Before running the scripts, ensure you have the following installed and configured on your Ubuntu server:

1. **Apache Web Server**: For serving the HTML page and PHP script.
2. **PHP**: Version 7.4 or higher recommended.
3. **Composer**: For managing PHP dependencies.
4. **TCPDF**: A PHP class for generating PDF documents.

### Installing Prerequisites

1. **Install Apache and PHP** (if not already installed):
   ```bash
   sudo apt update
   sudo apt install apache2 php libapache2-mod-php
   ```

2. **Install Composer**:
   ```bash
   sudo apt install composer
   ```

3. **Install TCPDF using Composer**:
   ```bash
   cd /opt/lampp/htdocs/TCPDF
   composer require tecnickcom/tcpdf
   ```

4. **Ensure File Permissions**:
   Ensure that the web server user (usually `www-data` or `daemon`) has appropriate permissions to read the files in your project directory:
   ```bash
   sudo chown -R www-data:www-data /opt/lampp/htdocs/TCPDF
   sudo chmod -R 755 /opt/lampp/htdocs/TCPDF
   ```

## Cloning the Repository

Clone this repository to your local machine or server:
```bash
git clone https://github.com/Lalatenduswain/PDF-Generation-with-TCPDF
```

Navigate to the project directory:
```bash
cd PDF-Generation-with-TCPDF
```

## Files and Structure

- **`index.html`**: The main HTML page with a button to trigger PDF generation.
- **`generate_pdf.php`**: The PHP script that generates the PDF with TCPDF.
- **`vendor/`**: Directory containing Composer dependencies including TCPDF.
- **`logo.jpg`**: Logo image file to be included in the PDF.

## Usage

1. **Place the Files**: Ensure all files (`index.html`, `generate_pdf.php`, `logo.jpg`, and `vendor/`) are in the `/opt/lampp/htdocs/TCPDF` directory.

2. **Access the HTML Page**: Open your web browser and navigate to:
   ```
   http://localhost/TCPDF/index.html
   ```

3. **Generate the PDF**: Click the "Download PDF" button on the HTML page. This will trigger the `generate_pdf.php` script and download the PDF with the content and logo.

## Disclaimer | Running the Script

**Author:** Lalatendu Swain | [GitHub](https://github.com/Lalatenduswain) | [Website](https://blog.lalatendu.info/)

This script is provided as-is and may require modifications or updates based on your specific environment and requirements. Use it at your own risk. The authors of the script are not liable for any damages or issues caused by its usage.

## Donations

If you find this script useful and want to show your appreciation, you can donate via [Buy Me a Coffee](https://www.buymeacoffee.com/lalatendu.swain).

## Support or Contact

Encountering issues? Don't hesitate to submit an issue on our [GitHub page](https://github.com/Lalatenduswain/PDF-Generation-with-TCPDF/issues).
