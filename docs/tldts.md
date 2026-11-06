# tldts

The directory `styles/all/template/js/tldts/` contains the browser UMD bundle and MIT license from
[tldts 7.4.19](https://www.npmjs.com/package/tldts/v/7.4.19).
The bundle includes data from the [Public Suffix List](https://publicsuffix.org/list/)
and runs locally in the browser. The source and build scripts are in the
[tldts repository](https://github.com/remusao/tldts).

To update the snapshot, use `npm pack --ignore-scripts tldts@VERSION` and
copy `package/dist/index.umd.min.js` to `tldts.umd.min.js`, plus
`package/LICENSE` to `LICENSE`. Update the version here and verify link
classification for public and private suffixes, same-site subdomains and
IP addresses.
