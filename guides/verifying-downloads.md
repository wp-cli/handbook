# Verifying WP-CLI Downloads

This guide explains how to cryptographically verify the authenticity and integrity of WP-CLI releases after downloading them from the Internet and before installing them on your system.

## Why verify downloads?

Verifying downloads ensures:
- **Authenticity**: The file was created and signed by the WP-CLI maintainers
- **Integrity**: The file has not been corrupted or tampered with during download

## Quick verification guide

After downloading `wp-cli.phar`, you can verify it using either GPG signatures or checksums.

### Method 1: Verify using GPG signature (Recommended)

This method provides the strongest security as it verifies both the integrity and authenticity of the download.

#### Step 1: Download the signature file

```bash
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar.asc
```

For a specific version release, download from GitHub releases (replace `X.X.X` with the desired version):

```bash
curl -LO https://github.com/wp-cli/wp-cli/releases/download/vX.X.X/wp-cli-X.X.X.phar
curl -LO https://github.com/wp-cli/wp-cli/releases/download/vX.X.X/wp-cli-X.X.X.phar.asc
```

For example, to download version 2.12.0:

```bash
curl -LO https://github.com/wp-cli/wp-cli/releases/download/v2.12.0/wp-cli-2.12.0.phar
curl -LO https://github.com/wp-cli/wp-cli/releases/download/v2.12.0/wp-cli-2.12.0.phar.asc
```

#### Step 2: Import the WP-CLI release signing key

WP-CLI releases are signed with the WP-CLI release signing key. Import the public key:

```bash
curl -L https://raw.githubusercontent.com/wp-cli/builds/gh-pages/wp-cli.pgp | gpg --import
```

The key fingerprint is:
```
63AF 7AA1 5067 C056 16FD  DD88 A3A2 E8F2 26F0 BC06
```

You can verify the key fingerprint after importing:

```bash
gpg --list-keys --with-fingerprint releases@wp-cli.org
```

The output should include:
```
pub   rsa2048 2016-01-29 [SC]
      63AF 7AA1 5067 C056 16FD  DD88 A3A2 E8F2 26F0 BC06
uid           [ unknown] WP-CLI Releases <releases@wp-cli.org>
sub   rsa2048 2016-01-29 [E]
```

**Note:** Releases prior to v1.5.1 (July 2016) were signed with a different key (fingerprint: `3B91 91CD 3CF1 B5C5 10EE  FAF6 AFAA E4A2 85E0 40A8`). If you need to verify older releases, import that key from the [builds repository README](https://github.com/wp-cli/builds/blob/gh-pages/README.md).

#### Step 3: Verify the signature

For the latest stable release:

```bash
gpg --verify wp-cli.phar.asc wp-cli.phar
```

For a specific version:

```bash
gpg --verify wp-cli-2.12.0.phar.asc wp-cli-2.12.0.phar
```

If the signature is valid, you'll see output similar to:

```
gpg: Signature made {DATE}
gpg:                using RSA key 63AF7AA15067C05616FDDD88A3A2E8F226F0BC06
gpg: Good signature from "WP-CLI Releases <releases@wp-cli.org>" [unknown]
```

You may see a warning about the key not being trusted:
```
gpg: WARNING: This key is not certified with a trusted signature!
gpg:          There is no indication that the signature belongs to the owner.
```

This is expected if you haven't personally verified and signed the WP-CLI key. The important part is seeing "Good signature" which confirms the file was signed by this key and hasn't been modified.

### Method 2: Verify using checksums

If GPG is not available, you can verify the integrity (but not authenticity) using SHA-512 or SHA-256 checksums.

#### Using SHA-512

Download the SHA-512 checksum file:

```bash
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar.sha512
```

Or for a specific release (replace `X.X.X` with your version):

```bash
curl -LO https://github.com/wp-cli/wp-cli/releases/download/vX.X.X/wp-cli-X.X.X.phar.sha512
```

Verify the checksum by comparing the output:

```bash
sha512sum wp-cli.phar
cat wp-cli.phar.sha512
```

The two hashes should match exactly.

#### Using SHA-256

Download the SHA-256 checksum file:

```bash
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar.sha256
```

Or for a specific release (replace `X.X.X` with your version):

```bash
curl -LO https://github.com/wp-cli/wp-cli/releases/download/vX.X.X/wp-cli-X.X.X.phar.sha256
```

Verify the checksum by comparing the output:

```bash
sha256sum wp-cli.phar
cat wp-cli.phar.sha256
```

The two hashes should match exactly.

**Note:** Checksum verification only confirms the file matches the published checksum. It does not verify that the file was created by the WP-CLI maintainers. For complete security, use GPG signature verification.

## Where to find verification files

### Latest stable and nightly builds

Verification files for the latest stable and nightly builds are available at:
- <https://github.com/wp-cli/builds/tree/gh-pages/phar>

Available files:
- `wp-cli.phar.asc` - GPG signature for latest stable
- `wp-cli.phar.sha512` - SHA-512 checksum for latest stable
- `wp-cli.phar.md5` - MD5 checksum (not recommended for security)
- `wp-cli-nightly.phar.asc` - GPG signature for nightly
- `wp-cli-nightly.phar.sha512` - SHA-512 checksum for nightly

### Specific version releases

For a specific version, verification files are available on the [GitHub releases page](https://github.com/wp-cli/wp-cli/releases):

Each release includes:
- `wp-cli-X.X.X.phar` - The WP-CLI phar file
- `wp-cli-X.X.X.phar.asc` - Detached GPG signature
- `wp-cli-X.X.X.phar.gpg` - Inline GPG signature
- `wp-cli-X.X.X.phar.sha512` - SHA-512 checksum
- `wp-cli-X.X.X.phar.sha256` - SHA-256 checksum
- `wp-cli-X.X.X.phar.md5` - MD5 checksum (not recommended for security)

## Complete installation example with verification

Here's a complete example of downloading, verifying, and installing WP-CLI:

```bash
# Download WP-CLI
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

# Download signature
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar.asc

# Import signing key (first time only)
curl -L https://raw.githubusercontent.com/wp-cli/builds/gh-pages/wp-cli.pgp | gpg --import

# Verify signature
gpg --verify wp-cli.phar.asc wp-cli.phar

# If verification succeeds, test it works
php wp-cli.phar --info

# Make executable and move to PATH
chmod +x wp-cli.phar
sudo mv wp-cli.phar /usr/local/bin/wp

# Verify installation
wp --info
```

## Additional resources

- [WP-CLI Builds Repository](https://github.com/wp-cli/builds) - Contains signing keys and latest builds
- [GitHub Releases](https://github.com/wp-cli/wp-cli/releases) - All version releases with verification files
- [GNU Privacy Guard](https://gnupg.org/) - Learn more about GPG
