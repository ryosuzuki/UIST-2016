require 'mini_magick'

files = Dir.glob('./*.jpg')
files.each do |file|
  image = MiniMagick::Image.open(file)
  size = image.width > image.height ? image.height : image.width
  image.combine_options do |c|
    c.gravity 'center'
    c.crop "#{size}x#{size}+0+0"
  end
  image.write "../#{file}"
end
