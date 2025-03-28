from PIL import Image, ImageDraw, ImageFont
import random
import string
import os
import sys

# Hàm tạo mã CAPTCHA ngẫu nhiên
def generate_captcha_text(length=6):
    characters = string.ascii_letters + string.digits
    return ''.join(random.choice(characters) for _ in range(length))

# Hàm tạo hình ảnh CAPTCHA
def create_captcha_image(captcha_text, width=120, height=40):
    image = Image.new('RGB', (width, height), color='#A9B7C0')
    draw = ImageDraw.Draw(image)

    try:
        font = ImageFont.truetype("arial.ttf", 24)
    except:
        font = ImageFont.load_default()

    text_bbox = draw.textbbox((0, 0), captcha_text, font=font)
    text_width = text_bbox[2] - text_bbox[0]
    text_height = text_bbox[3] - text_bbox[1]
    text_x = (width - text_width) // 2
    text_y = (height - text_height) // 2

    draw.text((text_x, text_y), captcha_text, fill='white', font=font)

    for _ in range(50):
        x = random.randint(0, width)
        y = random.randint(0, height)
        draw.point((x, y), fill='white')

    return image

# Hàm lưu hình ảnh CAPTCHA
def save_captcha_image(image, captcha_text, directory="public/captchas"):
    if not os.path.exists(directory):
        os.makedirs(directory)

    filename = os.path.join(directory, f"{captcha_text}.png")
    image.save(filename)
    return filename

# Main
if __name__ == "__main__":
    # Nhận mã CAPTCHA từ tham số dòng lệnh (nếu có), nếu không thì tạo ngẫu nhiên
    if len(sys.argv) > 1:
        captcha_text = sys.argv[1]
    else:
        captcha_text = generate_captcha_text(6)

    # Tạo và lưu hình ảnh CAPTCHA
    captcha_image = create_captcha_image(captcha_text)
    filename = save_captcha_image(captcha_image, captcha_text)
    print(captcha_text)  # In mã CAPTCHA để PHP có thể đọc
