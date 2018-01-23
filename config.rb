require 'compass/import-once/activate'
# Require any additional compass plugins here.


# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "wp-content/themes/displayblocksansa/css"
sass_dir = "wp-content/themes/displayblocksansa/sass"
images_dir = "wp-content/themes/displayblocksansa/images"
javascripts_dir = "wp-content/themes/displayblocksansa/js"
fonts_dir = "wp-content/themes/displayblocksansa/fonts"

output_style = :compressed
#:nested, :expanded, :compact, or :compressed.

environment = :production
#The environment mode. Defaults to :development, can also be :production

relative_assets = false

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false
color_output = false

preferred_syntax = :sass

require 'fileutils'
on_stylesheet_saved do |file|
  if File.exists?(file) && File.basename(file) == "style.css"
    puts "Moving: #{file}"
    FileUtils.cp(file, File.dirname(file) + "/../" + File.basename(file))
  end
end