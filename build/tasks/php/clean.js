const del = require('del')

module.exports = () => {
  return del.sync('../public/**/*.php', { force: true })
}
