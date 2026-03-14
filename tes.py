import requests
from requests.packages.urllib3.exceptions import InsecureRequestWarning

# Disable warning untuk site yang pake self-signed certificate
requests.packages.urllib3.disable_warnings(InsecureRequestWarning)

def scan_wordpress(url):
    if not url.startswith(('http://', 'https://')):
        url = 'http://' + url
    
    # Indikator umum WordPress
    wp_paths = [
        '/wp-login.php',
        '/wp-admin/upgrade.php',
        '/wp-content/',
        '/readme.html'
    ]
    
    is_wp = False
    print(f"[*] Checking: {url}")

    try:
        # 1. Cek Header & Content di Homepage
        response = requests.get(url, timeout=10, verify=False)
        if 'wp-content' in response.text or 'wp-includes' in response.text:
            is_wp = True
        
        # 2. Cek Path Spesifik (kalo step 1 belum yakin)
        if not is_wp:
            for path in wp_paths:
                check_url = url.rstrip('/') + path
                r = requests.get(check_url, timeout=5, verify=False)
                if r.status_code == 200 and ('wp-' in check_url or 'WordPress' in r.text):
                    is_wp = True
                    break
        
        if is_wp:
            print(f"[+] FOUND: {url} is using WordPress")
            with open("wordpress.txt", "a") as f:
                f.write(url + "\n")
        else:
            print(f"[-] NOT WP: {url}")

    except Exception as e:
        print(f"[!] Error {url}: {e}")

if __name__ == "__main__":
    # Masukkan list target di sini atau modifikasi untuk baca file
    targets = [
        "example.com",
        "testsite.id"
    ]
    
    print("--- Starting Scan ---")
    for target in targets:
        scan_wordpress(target)
    print("--- Scan Finished. Results saved to wordpress.txt ---")
