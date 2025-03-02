import nltk
from nltk.stem import WordNetLemmatizer
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity

# Télécharger les ressources NLP nécessaires
nltk.download('averaged_perceptron_tagger')
nltk.download('wordnet')
nltk.download('punkt')

# Initialisation du lemmatizer
lemmatizer = WordNetLemmatizer()

# Réponses directes pour les salutations et expressions courantes
direct_responses = {
    "hi": "Hello! How can I help you?",
    "hello": "Hi there! What do you need?",
    "hey": "Hey! How can I assist you?",
    "how are you": "I'm just a bot, but I'm here to help!",
    "good morning": "Good morning! What can I do for you?",
    "good afternoon": "Good afternoon! How can I assist you?",
    "good evening": "Good evening! How may I help?",
    "thank you": "You're welcome! Let me know if you need anything else.",
    "thanks": "No problem! I'm here to help.",
    "bye": "Goodbye! Have a great day.",
    "quit": "Exiting the chatbot. See you next time!"
}

# Dataset de questions/réponses
dataset = [
    {"question": "How do I write a CV?", "answer": "To write a CV, focus on clear formatting, emphasize skills, and provide detailed work experience."},
    {"question": "What should I include in a cover letter?", "answer": "A cover letter should introduce yourself, highlight key skills and experiences, and explain why you're a good fit for the role."},
    {"question": "How do I prepare for a job interview?", "answer": "Research the company, prepare answers to common questions, and practice speaking confidently."},
    {"question": "What skills are employers looking for?", "answer": "Communication, problem-solving, technical expertise, and teamwork are highly valued by employers."}
]

# Préparer les données pour la comparaison
questions_list = [entry["question"] for entry in dataset]
answers_list = [entry["answer"] for entry in dataset]

# Fonction pour lemmatiser une phrase
def lemma_me(sentence):
    tokens = nltk.word_tokenize(sentence.lower())
    pos_tags = nltk.pos_tag(tokens)
    
    lemmatized_sentence = [
        lemmatizer.lemmatize(token, pos_tag[1][0].lower()) if pos_tag[1][0].lower() in ['n', 'v', 'a', 'r']
        else token
        for token, pos_tag in zip(tokens, pos_tags)
    ]
    
    return " ".join(lemmatized_sentence)

# Fonction pour traiter la question et trouver la meilleure 
