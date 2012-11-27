# This theme uses Sass/Compass for its stylesheets
# http://compass-style.org/

# Plugins

# Growl support on Mac OS X
if RUBY_PLATFORM.downcase.include?("darwin")
  require 'compass-growl'
end
# Susy grids
require 'susy'

# Configuration

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "sass"
images_dir = "img"
javascripts_dir = "js"

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false
