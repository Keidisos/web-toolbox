import subprocess
import socket
import sys

def nslookup(domain):
    try:
        # Obtenir l'adresse IP via une résolution DNS
        ip_address = socket.gethostbyname(domain)
        print(f"[+] Adresse IP de {domain}: {ip_address}")
        return ip_address
    except socket.gaierror as e:
        print(f"[-] Échec de la résolution DNS pour {domain}: {e}")
        return None

def nmap_scan(ip_address):
    try:
        print(f"[+] Lancement de Nmap sur {ip_address}...")
        # Exécuter la commande Nmap avec -sS et -sV
        result = subprocess.run(["nmap", "-sS", "-sV", "-T4", ip_address], capture_output=True, text=True)
        print("[+] Résultats de Nmap:")
        print(result.stdout)
    except FileNotFoundError:
        print("[-] Nmap n'est pas installé ou introuvable dans le PATH.")
    except Exception as e:
        print(f"[-] Une erreur est survenue lors du scan Nmap: {e}")

def main():
    if len(sys.argv) != 2:
        print("Usage: python script.py <nom_de_domaine>")
        sys.exit(1)

    domain = sys.argv[1]
    ip_address = nslookup(domain)
    if ip_address:
        nmap_scan(ip_address)

if __name__ == "__main__":
    main()
