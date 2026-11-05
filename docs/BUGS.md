# Bugs

## Reports from the extension audit

### Multi-label public suffixes cause incorrect internal-link detection

The two-label comparison can group unrelated sites under a suffix such as com.br. Use unrelated hosts sharing a suffix as a regression case. [Source](https://github.com/phpbbmodders/elonw/issues/19)
