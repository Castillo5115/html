import pygame
import sys
pygame.init()

PANTALLA = pygame.display.set_mode((500,400))
BLANCO = (255, 255, 255);
ROJO = (255, 0, 0);

pygame.display.set_caption('Mi primer juego')
PANTALLA.fill(BLANCO);

while True:
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            pygame.quit()
            sys.exit()
    pygame.display.update()
    pygame.draw.rect(PANTALLA, ROJO, (100,50,100,50));